<?php

namespace App\Repositories;

use App\Models\Contato;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContatoRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:31 pm UTC
 *
 * @method Contato findWithoutFail($id, $columns = ['*'])
 * @method Contato find($id, $columns = ['*'])
 * @method Contato first($columns = ['*'])
*/
class ContatoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'telefoneFixo',
        'telefoneCelular',
        'telefoneRecado',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Contato::class;
    }
}
