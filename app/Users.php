<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Users extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';
    protected $fillable = [
        'id_role',
        'id_ville',
        'name',
        'email',
        'prenom',
        'date_naissance',
        'password',
        'status',
        'forgotPass',
        'derniere_connexion'
    ];


    public function roles(){
        return $this->belongsTo('\App\Roles', 'id_role');
    }

    public function villes(){
    	return $this->belongsTo('\App\Villes', 'id_ville');
    }

    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}
