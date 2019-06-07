<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Silber\Bouncer\Database\HasRolesAndAbilities;


class Users extends Model
{
    const CREATED_AT = 'creacion';
    const UPDATED_AT = 'actualizacion';
    protected $table = 'users';
    protected $hidden = [
        'email_verified_at', 'password', 'remember_token'
    ];
}
