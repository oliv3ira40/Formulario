<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DadosFamiliare
 * @package App\Models
 * @version June 5, 2018, 2:44 pm UTC
 *
 * @property integer pessoa_id
 * @property string comQuemRedise
 * @property string mulherResponsavelFamilia
 * @property string ProtegidaMariaDaPenha
 * @property integer filhosMenor18
 * @property integer filhosMaior18
 * @property string emRelacaoAosFilhos
 * @property string TutorCriancaOuAdolescente
 * @property integer pessoasQueIraoResidir
 * @property string moraComIdoso
 * @property string VoceOuFamiliarComDeficiencia
 * @property string tipoDaDeficiencia
 * @property string voceOuFamiliarDoencaCronica
 */
class DadosFamiliare extends Model
{
    use SoftDeletes;

    public $table = 'dados_familiares';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'pessoa_id',
        'comQuemRedise',
        'mulherResponsavelFamilia',
        'ProtegidaMariaDaPenha',
        'filhosMenor18',
        'filhosMaior18',
        'emRelacaoAosFilhos',
        'TutorCriancaOuAdolescente',
        'pessoasQueIraoResidir',
        'moraComIdoso',
        'VoceOuFamiliarComDeficiencia',
        'tipoDaDeficiencia',
        'voceOuFamiliarDoencaCronica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pessoa_id' => 'integer',
        'comQuemRedise' => 'string',
        'mulherResponsavelFamilia' => 'string',
        'ProtegidaMariaDaPenha' => 'string',
        'filhosMenor18' => 'integer',
        'filhosMaior18' => 'integer',
        'emRelacaoAosFilhos' => 'string',
        'TutorCriancaOuAdolescente' => 'string',
        'pessoasQueIraoResidir' => 'integer',
        'moraComIdoso' => 'string',
        'VoceOuFamiliarComDeficiencia' => 'string',
        'tipoDaDeficiencia' => 'string',
        'voceOuFamiliarDoencaCronica' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
