<?php

namespace App\Repositories;

use App\Models\comQuemResideOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class comQuemResideOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:48 pm UTC
 *
 * @method comQuemResideOption findWithoutFail($id, $columns = ['*'])
 * @method comQuemResideOption find($id, $columns = ['*'])
 * @method comQuemResideOption first($columns = ['*'])
*/
class comQuemResideOptionRepository extends BaseRepository
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
        return comQuemResideOption::class;
    }
}
