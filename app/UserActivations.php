<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivations extends Model
{
    /**
     * @var string
     */
    protected $table = 'user_activations';
    protected $fillable = [
    	'users_id',
        'token'
    ];
}
