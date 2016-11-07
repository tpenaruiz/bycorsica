<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    /**
     * @var string
     */
    protected $table = 'villes';
    protected $fillable = [
        'id_user',
        'id_tva',
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
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}