<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{
    /**
     * @var string
     */
    protected $table = 'tva';
    protected $fillable = [
        'id_pays',
        'multiplicate',
        'nom',
        'valeur'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pays(){
        return $this->belongsTo('\App\Pays', 'id_pays');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}