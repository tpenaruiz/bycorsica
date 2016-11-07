<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Fournisseurs extends Model
{
    /**
     * @var string
     */
    protected $table = 'fournisseurs';
    protected $fillable = [
        'id_fabriquant',
        'id_langue',
        'nom',
        'description'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fabriquants(){
        return $this->belongsTo('\App\Fabriquants', 'id_fabriquant');
    }

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