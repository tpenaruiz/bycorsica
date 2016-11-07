<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    /**
     * @var string
     */
    protected $table = 'panier';
    protected $fillable = [
        'id_commande',
        'id_produit',
        'quantite'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commandes(){
        return $this->belongsTo('\App\Commandes', 'id_commande');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function produits(){
        return $this->belongsTo('\App\Produits', 'id_produit');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}