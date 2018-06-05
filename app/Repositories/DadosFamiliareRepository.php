<?php

namespace App\Repositories;

use App\Models\DadosFamiliare;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DadosFamiliareRepository
 * @package App\Repositories
 * @version June 5, 2018, 2:44 pm UTC
 *
 * @method DadosFamiliare findWithoutFail($id, $columns = ['*'])
 * @method DadosFamiliare find($id, $columns = ['*'])
 * @method DadosFamiliare first($columns = ['*'])
*/
class DadosFamiliareRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'comQuemRedise',
        'mulherResponsavelFamilia',
        'ProtegidaMariaDaPenha',
        'filhosMenor18',
        'filhosMaior18',
        'emRelacaoAosFilhos',
        'TutorCriancaOuAdolescente',
        'pessoasQueIraoResidir',
        'moraComIdoso',
        'VoceOuFamiliarComDeficiencia',
        'tipoDaDeficiencia',
        'voceOuFamiliarDoencaCronica'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DadosFamiliare::class;
    }
}
