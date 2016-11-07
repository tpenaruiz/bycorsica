<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SousCategories extends Model
{
    /**
     * @var string
     */
    protected $table = 'sousCategories';
    protected $fillable = [
        'id_langue',
        'id_categorie',
        'id_media',
        'libelle',
        'description',
        'status'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function langues(){
        return $this->belongsTo('\App\Langues', 'id_langue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories(){
        return $this->belongsTo('\App\Categories', 'id_categorie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medias(){
        return $this->belongsTo('\App\Medias', 'id_media');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }

}