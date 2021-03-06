<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Repositories\PessoaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\SexoOption;
use App\Models\UfOption;
use App\Models\EstadoCivilOption;
use App\Models\EscolaridadeOption;

class PessoaController extends AppBaseController
{
    /** @var  PessoaRepository */
    private $pessoaRepository;

    public function __construct(PessoaRepository $pessoaRepo)
    {
        $this->pessoaRepository = $pessoaRepo;
    }

    /**
     * Display a listing of the Pessoa.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pessoaRepository->pushCriteria(new RequestCriteria($request));
        $pessoas = $this->pessoaRepository->all();

        return view('pessoas.index')
            ->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new Pessoa.
     *
     * @return Response
     */
    public function create()
    {
        $escolaridadeOptions = EscolaridadeOption::all();
        $estadoCivilOptions = EstadoCivilOption::all();
        $sexoOptions = SexoOption::all();
        $ufsOptions = UfOption::all();
        
        foreach ($escolaridadeOptions as $option) {
            $escolaridadeOption[$option['value']] = $option['value'];
        }
        unset($option);
        foreach ($estadoCivilOptions as $option) {
            $estadoCivilOption[$option['value']] = $option['value'];
        }
        unset($option);
        foreach ($sexoOptions as $option) {
            $sexoOption[$option['value']] = $option['value'];
        }
        unset($option);
        foreach ($ufsOptions as $option) {
            $ufsOption[$option['value']] = $option['value'];
        }

        return view('pessoas.create', compact('escolaridadeOption', 'estadoCivilOption', 'sexoOption', 'ufsOption'));
    }

    /**
     * Store a newly created Pessoa in storage.
     *
     * @param CreatePessoaRequest $request
     *
     * @return Response
     */
    public function store(CreatePessoaRequest $request)
    {
        $input = $request->all();
        dd($input);

        $pessoa = $this->pessoaRepository->create($input);

        Flash::success('Pessoa saved successfully.');

        return redirect(route('pessoas.index'));
    }

    /**
     * Display the specified Pessoa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        return view('pessoas.show')->with('pessoa', $pessoa);
    }

    /**
     * Show the form for editing the specified Pessoa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        return view('pessoas.edit')->with('pessoa', $pessoa);
    }

    /**
     * Update the specified Pessoa in storage.
     *
     * @param  int              $id
     * @param UpdatePessoaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePessoaRequest $request)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        $pessoa = $this->pessoaRepository->update($request->all(), $id);

        Flash::success('Pessoa updated successfully.');

        return redirect(route('pessoas.index'));
    }

    /**
     * Remove the specified Pessoa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pessoa = $this->pessoaRepository->findWithoutFail($id);

        if (empty($pessoa)) {
            Flash::error('Pessoa not found');

            return redirect(route('pessoas.index'));
        }

        $this->pessoaRepository->delete($id);

        Flash::success('Pessoa deleted successfully.');

        return redirect(route('pessoas.index'));
    }
}
