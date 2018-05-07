<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email_confirmed'];

    /**
     * Get the users_confirmation record associated with the user.
     */
    public function userConfirmation()
    {
        return $this->hasOne('App\UserConfirmation');
    }
}
