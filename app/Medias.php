<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    /**
     * @var string
     */
    protected $table = 'medias';
    protected $fillable = [
        'type',
        'libelle',
        'description',
        'chemin'
    ];


    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}