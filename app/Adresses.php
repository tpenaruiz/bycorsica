<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Adresses extends Model
{
    /**
     * @var string
     */
    protected $table = 'adresses';
    protected $fillable = [
        'id_user',
        'id_pays',
        'id_ville',
        'libelle',
        'adresse',
        'adresse_suppl',
        'complement',
        'telephone',
        'status'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(){
        return $this->belongsTo('\App\Users', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pays(){
        return $this->belongsTo('\App\Pays', 'id_pays');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function villes(){
        return $this->belongsTo('\App\Villes', 'id_ville');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}