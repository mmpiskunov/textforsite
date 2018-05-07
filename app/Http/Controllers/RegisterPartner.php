<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\PartnerRegistered;
use App\UserConfirmation;
use Mail;
use Validator;
use Illuminate\Http\Request;

class RegisterPartner extends Controller
{
    /**
     * Зарегистрировать партнера.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'city' => 'required',
            'email' => 'required|email'
        ]);

        $name = $request->input('name');
        $city = $request->input('city');
        $email = $request->input('email');

        if($existing_user = User::where('email', $email)->first()){
            if($existing_user['email_confirmed']){
                $validator->after(function ($validator) {
                    $validator->errors()->add('email', 'Ошибка! Данный e-mail уже зарегистрирован.');
                });
            }else{
                $existing_user->userConfirmation()->forceDelete();
                $existing_user->forceDelete();
            }
        }

        if ($validator->fails()) {
            $request->flash();
            return redirect('registration')
                ->withErrors($validator);
        }

        $data = [
            'name' => $name,
            'city' => $city,
            'email' => $email,
            'token' => encrypt($email)
        ];

        $user = new User;

        $user->name = $name;
        $user->city = $city;
        $user->email = $email;

        $user->save();

        $user->userConfirmation()->create([
            'token' => $data['token']
        ]);

        Mail::to($email)->send(new PartnerRegistered($data));

        return view('registration.success', $data);
    }

    /**
     * Подтверждение e-mail адреса
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => [
                'required'
            ]
        ]);

        $confirmation = UserConfirmation::where('token', $request->input('token'))->with('user')->first();

        if(!$confirmation){
            $validator->after(function ($validator) {
                $validator->errors()->add('token', 'Token mismatch');
            });
        }

        if ($validator->fails()) {
            return view('registration.confirmation-error');
        }

        $confirmation->user()->update([
            'email_confirmed' => true
        ]);

        $confirmation->forceDelete();

        return view('registration.confirmation-success', $confirmation->user);
    }
}
