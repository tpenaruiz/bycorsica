<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /**
     * @var string
     */
    protected $table = 'contacts';
    protected $fillable = [
        'object',
        'reference_commande',
        'email',
        'message'
    ];
}