<?php

namespace App\Repositories;

use App\Models\Endereco;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EnderecoRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:27 pm UTC
 *
 * @method Endereco findWithoutFail($id, $columns = ['*'])
 * @method Endereco find($id, $columns = ['*'])
 * @method Endereco first($columns = ['*'])
*/
class EnderecoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'logradouro',
        'complemento',
        'bairro',
        'cep',
        'estado',
        'cidade'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Endereco::class;
    }
}
