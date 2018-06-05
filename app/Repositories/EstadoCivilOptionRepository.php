<?php

namespace App\Repositories;

use App\Models\EstadoCivilOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstadoCivilOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:45 pm UTC
 *
 * @method EstadoCivilOption findWithoutFail($id, $columns = ['*'])
 * @method EstadoCivilOption find($id, $columns = ['*'])
 * @method EstadoCivilOption first($columns = ['*'])
*/
class EstadoCivilOptionRepository extends BaseRepository
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
        return EstadoCivilOption::class;
    }
}
