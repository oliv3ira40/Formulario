<?php

namespace App\Repositories;

use App\Models\doencaCronicaOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class doencaCronicaOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:50 pm UTC
 *
 * @method doencaCronicaOption findWithoutFail($id, $columns = ['*'])
 * @method doencaCronicaOption find($id, $columns = ['*'])
 * @method doencaCronicaOption first($columns = ['*'])
*/
class doencaCronicaOptionRepository extends BaseRepository
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
        return doencaCronicaOption::class;
    }
}
