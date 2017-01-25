<?php
/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 18/01/2017
 * Time: 22:51
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * Si tu souhaite prendre tous les champs d'une table et
     * éviter le fillable avec saisie de tous les champs
     * alors fait hériter ta classe Model avec la classe BaseModel
     * celle-ci hérite de Model, tu aura donc toutes les fonction de la classe Model
     * + ceux de BaseModel
     *
     * @var array
     */
    protected $guarded = []; // On accepte tous les champs de la BDD
}