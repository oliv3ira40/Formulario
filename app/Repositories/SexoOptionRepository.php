<?php

namespace App\Repositories;

use App\Models\SexoOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SexoOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 7:50 pm UTC
 *
 * @method SexoOption findWithoutFail($id, $columns = ['*'])
 * @method SexoOption find($id, $columns = ['*'])
 * @method SexoOption first($columns = ['*'])
*/
class SexoOptionRepository extends BaseRepository
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
        return SexoOption::class;
    }
}
