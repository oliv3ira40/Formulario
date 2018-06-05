<?php

namespace App\Repositories;

use App\Models\UfOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UfOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:43 pm UTC
 *
 * @method UfOption findWithoutFail($id, $columns = ['*'])
 * @method UfOption find($id, $columns = ['*'])
 * @method UfOption first($columns = ['*'])
*/
class UfOptionRepository extends BaseRepository
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
        return UfOption::class;
    }
}
