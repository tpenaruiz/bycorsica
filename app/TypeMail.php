<?php
/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 06/04/2017
 * Time: 22:57
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeMail extends Model
{
    protected $table = 'typeMail';
    protected $fillable = [
        'type'
    ];

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}