<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TrabalhoERenda
 * @package App\Models
 * @version June 5, 2018, 2:35 pm UTC
 *
 * @property integer pessoa_id
 * @property string rendaBrutaFamiliar
 * @property string tipoRenda
 * @property string situacaoOcupacional
 * @property string beneficioCasa
 */
class TrabalhoERenda extends Model
{
    use SoftDeletes;

    public $table = 'trabalho_e_rendas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pessoa_id',
        'rendaBrutaFamiliar',
        'tipoRenda',
        'situacaoOcupacional',
        'beneficioCasa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pessoa_id' => 'integer',
        'rendaBrutaFamiliar' => 'string',
        'tipoRenda' => 'string',
        'situacaoOcupacional' => 'string',
        'beneficioCasa' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
