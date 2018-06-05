<?php

namespace App\Repositories;

use App\Models\relacaoAosFilhosOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class relacaoAosFilhosOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:48 pm UTC
 *
 * @method relacaoAosFilhosOption findWithoutFail($id, $columns = ['*'])
 * @method relacaoAosFilhosOption find($id, $columns = ['*'])
 * @method relacaoAosFilhosOption first($columns = ['*'])
*/
class relacaoAosFilhosOptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return relacaoAosFilhosOption::class;
    }
}
