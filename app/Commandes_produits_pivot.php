<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Commandes_Produits_Pivot extends Model
{
    /**
     * @var string
     */
    protected $table = 'commandes_produits_pivot';
    protected $fillable = [
        'id_commande',
        'id_produit'
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