<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    /**
     * @var string
     */
    protected $table = 'commandes';
    protected $fillable = [
        'id_user',
        'id_tva',
        'id_commande_produit_pivot',
        'reference',
        'montant',
        'status'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(){
        return $this->belongsTo('\App\Users', 'id_users');
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
    public function produits(){
        return $this->belongsToMany('\App\Produits', 'commandes_produits_pivot', 'id_commande', 'id_produit');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y', date_timestamp_get(date_create($this->created_at)));
    }
}