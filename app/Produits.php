<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    /**
     * @var string
     */
    protected $table = 'produits';
    protected $fillable = [
        'id_media',
        'id_sousCategorie',
        'id_tva',
        'id_fournisseur',
        'id_langue',
        'nom',
        'description',
        'prix',
        'disponible',
        'status'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medias(){
        return $this->belongsTo('\App\Medias', 'id_media');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sousCategories(){
        return $this->belongsTo('\App\SousCategories', 'id_sousCategorie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tva(){
        return $this->belongsTo('\App\Tva', 'id_tva');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fournisseurs(){
        return $this->belongsTo('\App\Fournisseurs', 'id_fournisseur');
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