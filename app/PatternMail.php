<?php
/**
 * Created by PhpStorm.
 * User: bilel
 * Date: 06/04/2017
 * Time: 22:57
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatternMail extends Model
{
    protected $table = 'patternMail';
    protected $fillable = [
        'id_langue',
        'id_type',
        'expediteur',
        'destinateur',
        'objet',
        'contenu',
        'id_attachment',
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
    public function type(){
        return $this->belongsTo('\App\TypeMail', 'id_type');
    }

    /**
     * @return bool|string
     */
    public function getCreateddateAttribute(){
        return date('d/m/Y H\Hi', date_timestamp_get(date_create($this->created_at)));
    }
}