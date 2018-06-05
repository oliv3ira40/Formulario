<?php

namespace App\Repositories;

use App\Models\EscolaridadeOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EscolaridadeOptionRepository
 * @package App\Repositories
 * @version June 5, 2018, 8:45 pm UTC
 *
 * @method EscolaridadeOption findWithoutFail($id, $columns = ['*'])
 * @method EscolaridadeOption find($id, $columns = ['*'])
 * @method EscolaridadeOption first($columns = ['*'])
*/
class EscolaridadeOptionRepository extends BaseRepository
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
        return EscolaridadeOption::class;
    }
}
