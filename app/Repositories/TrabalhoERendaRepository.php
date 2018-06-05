<?php

namespace App\Repositories;

use App\Models\TrabalhoERenda;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabalhoERendaRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:35 pm UTC
 *
 * @method TrabalhoERenda findWithoutFail($id, $columns = ['*'])
 * @method TrabalhoERenda find($id, $columns = ['*'])
 * @method TrabalhoERenda first($columns = ['*'])
*/
class TrabalhoERendaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'rendaBrutaFamiliar',
        'tipoRenda',
        'situacaoOcupacional',
        'beneficioCasa'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TrabalhoERenda::class;
    }
}
