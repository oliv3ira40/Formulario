<?php

namespace App\Repositories;

use App\Models\NacionalidadeOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NacionalidadeOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:44 pm UTC
 *
 * @method NacionalidadeOption findWithoutFail($id, $columns = ['*'])
 * @method NacionalidadeOption find($id, $columns = ['*'])
 * @method NacionalidadeOption first($columns = ['*'])
*/
class NacionalidadeOptionRepository extends BaseRepository
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
        return NacionalidadeOption::class;
    }
}
