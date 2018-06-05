<?php

namespace App\Repositories;

use App\Models\Pessoa;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PessoaRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:15 pm UTC
 *
 * @method Pessoa findWithoutFail($id, $columns = ['*'])
 * @method Pessoa find($id, $columns = ['*'])
 * @method Pessoa first($columns = ['*'])
*/
class PessoaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Pessoa::class;
    }
}
