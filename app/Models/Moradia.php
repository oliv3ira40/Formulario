<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Moradia
 * @package App\Models
 * @version June 5, 2018, 2:48 pm UTC
 *
 * @property integer pessoa_id
 * @property string situacaoMoradiaAtual
 * @property string tipologiaCasa
 * @property string pessoaDeRuaComAjuda
 * @property string recebeAjudaCusteioMoradia
 * @property string residenciaCondenadaRisco
 * @property string tipoRiscoResidencia
 * @property string participanteDoDireitoMoradia
 */
class Moradia extends Model
{
    use SoftDeletes;

    public $table = 'moradias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pessoa_id',
        'situacaoMoradiaAtual',
        'tipologiaCasa',
        'pessoaDeRuaComAjuda',
        'recebeAjudaCusteioMoradia',
        'residenciaCondenadaRisco',
        'tipoRiscoResidencia',
        'participanteDoDireitoMoradia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pessoa_id' => 'integer',
        'situacaoMoradiaAtual' => 'string',
        'tipologiaCasa' => 'string',
        'pessoaDeRuaComAjuda' => 'string',
        'recebeAjudaCusteioMoradia' => 'string',
        'residenciaCondenadaRisco' => 'string',
        'tipoRiscoResidencia' => 'string',
        'participanteDoDireitoMoradia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
