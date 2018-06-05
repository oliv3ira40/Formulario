<?php

namespace App\Repositories;

use App\Models\tipoDaDeficienciaOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoDaDeficienciaOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:49 pm UTC
 *
 * @method tipoDaDeficienciaOption findWithoutFail($id, $columns = ['*'])
 * @method tipoDaDeficienciaOption find($id, $columns = ['*'])
 * @method tipoDaDeficienciaOption first($columns = ['*'])
*/
class tipoDaDeficienciaOptionRepository extends BaseRepository
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
        return tipoDaDeficienciaOption::class;
    }
}
