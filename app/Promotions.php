<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    /**
     * @var string
     */
    protected $table = 'promotions';
    protected $fillable = [
        'id_produit',
        'id_langue',
        'pourcentage',
        'description'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produits(){
        return $this->belongsTo('\App\Produits', 'id_produit');
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