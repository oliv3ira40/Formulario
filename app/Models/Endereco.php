<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Endereco
 * @package App\Models
 * @version June 5, 2018, 2:27 pm UTC
 *
 * @property integer pessoa_id
 * @property string logradouro
 * @property string complemento
 * @property string bairro
 * @property integer cep
 * @property string estado
 * @property string cidade
 */
class Endereco extends Model
{
    use SoftDeletes;

    public $table = 'enderecos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pessoa_id',
        'logradouro',
        'complemento',
        'bairro',
        'cep',
        'estado',
        'cidade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pessoa_id' => 'integer',
        'logradouro' => 'string',
        'complemento' => 'string',
        'bairro' => 'string',
        'cep' => 'integer',
        'estado' => 'string',
        'cidade' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
