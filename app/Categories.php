<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * @var string
     */
    protected $table = 'categories';
    protected $fillable = [
        'id_langue',
        'libelle',
        'description',
        'status'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function langues(){
        return $this->belongsTo('\App\Langues', 'id_langue');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}