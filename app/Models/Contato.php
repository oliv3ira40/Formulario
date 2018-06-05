<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contato
 * @package App\Models
 * @version June 5, 2018, 2:31 pm UTC
 *
 * @property integer pessoa_id
 * @property decimal telefoneFixo
 * @property decimal telefoneCelular
 * @property decimal telefoneRecado
 * @property string email
 */
class Contato extends Model
{
    use SoftDeletes;

    public $table = 'contatos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pessoa_id',
        'telefoneFixo',
        'telefoneCelular',
        'telefoneRecado',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pessoa_id' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
