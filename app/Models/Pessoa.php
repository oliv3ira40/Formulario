<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pessoa
 * @package App\Models
 * @version June 5, 2018, 2:15 pm UTC
 *
 * @property decimal cpf
 * @property string nomeCompleto
 * @property decimal rg
 * @property date dataEmissaoRg
 * @property string ufEmissaoRg
 * @property string orgaoEmissorRg
 * @property date dataNascimento
 * @property string ufNascimento
 * @property string naturalidade
 * @property string nacionalidade
 * @property string sexo
 * @property string estadoCivil
 * @property string escolaridade
 * @property string carteiraProfissional
 * @property decimal serieCarteiraProfissional
 * @property decimal nis
 * @property string nomeCompletoPai
 * @property string nomeCompletoMae
 * @property string nomeCompletoCompanheiro
 * @property decimal rgCompanheiro
 * @property decimal cpfCompanheiro
 */
class Pessoa extends Model
{
    use SoftDeletes;

    public $table = 'pessoas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cpf',
        'nomeCompleto',
        'rg',
        'dataEmissaoRg',
        'ufEmissaoRg',
        'orgaoEmissorRg',
        'dataNascimento',
        'ufNascimento',
        'naturalidade',
        'nacionalidade',
        'sexo',
        'estadoCivil',
        'escolaridade',
        'carteiraProfissional',
        'serieCarteiraProfissional',
        'nis',
        'nomeCompletoPai',
        'nomeCompletoMae',
        'nomeCompletoCompanheiro',
        'rgCompanheiro',
        'cpfCompanheiro'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nomeCompleto' => 'string',
        'dataEmissaoRg' => 'date',
        'ufEmissaoRg' => 'string',
        'orgaoEmissorRg' => 'string',
        'dataNascimento' => 'date',
        'ufNascimento' => 'string',
        'naturalidade' => 'string',
        'nacionalidade' => 'string',
        'sexo' => 'string',
        'estadoCivil' => 'string',
        'escolaridade' => 'string',
        'carteiraProfissional' => 'string',
        'nomeCompletoPai' => 'string',
        'nomeCompletoMae' => 'string',
        'nomeCompletoCompanheiro' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cpf' => 'required',
        'cpfCompanheiro' => 'exit'
    ];

    
}
