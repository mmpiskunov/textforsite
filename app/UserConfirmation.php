<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserConfirmation extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_confirmation';

    protected $fillable = ['token'];

    /**
     * Get the user that owns the confirmation.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
