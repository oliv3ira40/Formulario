<?php

namespace App\Repositories;

use App\Models\Moradia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MoradiaRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:48 pm UTC
 *
 * @method Moradia findWithoutFail($id, $columns = ['*'])
 * @method Moradia find($id, $columns = ['*'])
 * @method Moradia first($columns = ['*'])
*/
class MoradiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'situacaoMoradiaAtual',
        'tipologiaCasa',
        'pessoaDeRuaComAjuda',
        'recebeAjudaCusteioMoradia',
        'residenciaCondenadaRisco',
        'tipoRiscoResidencia',
        'participanteDoDireitoMoradia'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Moradia::class;
    }
}
