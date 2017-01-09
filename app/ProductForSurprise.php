<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductForSurprise extends Model
{
    /**
     * @var string
     */
    protected $table = 'productForSurprise';
    protected $fillable = [
        'id_user',
        'id_produit'
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