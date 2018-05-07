<?php

namespace App\Http\Controllers;

use App\Mail\RequestSent;
use Mail;
use Validator;
use Storage;
use Illuminate\Http\Request;

class RequestForm extends Controller
{

    public function send(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'site' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            $request->flash();
            return view('request-form.errors')
                ->withErrors($validator);
        }

        $name = $request->input('name');
        $site = $request->input('site');
        $email = $request->input('email');
        $p = $request->cookie('p');

        $data = [
            'name' => $name,
            'site' => $site,
            'email' => $email,
            'p' => $p
        ];

        if($p){
            Storage::disk('stat')->put("send/".date("Y-m-d").".txt", $request->ip().'|'.$p."\n");
        }

        Mail::to('ru@inkapi.com')->bcc('info@inkapi.com')->send(new RequestSent($data));

        return view('request-form.success', $data);
    }
}
