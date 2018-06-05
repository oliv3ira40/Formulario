<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDadosFamiliareRequest;
use App\Http\Requests\UpdateDadosFamiliareRequest;
use App\Repositories\DadosFamiliareRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DadosFamiliareController extends AppBaseController
{
    /** @var  DadosFamiliareRepository */
    private $dadosFamiliareRepository;

    public function __construct(DadosFamiliareRepository $dadosFamiliareRepo)
    {
        $this->dadosFamiliareRepository = $dadosFamiliareRepo;
    }

    /**
     * Display a listing of the DadosFamiliare.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dadosFamiliareRepository->pushCriteria(new RequestCriteria($request));
        $dadosFamiliares = $this->dadosFamiliareRepository->all();

        return view('dados_familiares.index')
            ->with('dadosFamiliares', $dadosFamiliares);
    }

    /**
     * Show the form for creating a new DadosFamiliare.
     *
     * @return Response
     */
    public function create()
    {
        return view('dados_familiares.create');
    }

    /**
     * Store a newly created DadosFamiliare in storage.
     *
     * @param CreateDadosFamiliareRequest $request
     *
     * @return Response
     */
    public function store(CreateDadosFamiliareRequest $request)
    {
        $input = $request->all();

        $dadosFamiliare = $this->dadosFamiliareRepository->create($input);

        Flash::success('Dados Familiare saved successfully.');

        return redirect(route('dadosFamiliares.index'));
    }

    /**
     * Display the specified DadosFamiliare.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dadosFamiliare = $this->dadosFamiliareRepository->findWithoutFail($id);

        if (empty($dadosFamiliare)) {
            Flash::error('Dados Familiare not found');

            return redirect(route('dadosFamiliares.index'));
        }

        return view('dados_familiares.show')->with('dadosFamiliare', $dadosFamiliare);
    }

    /**
     * Show the form for editing the specified DadosFamiliare.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dadosFamiliare = $this->dadosFamiliareRepository->findWithoutFail($id);

        if (empty($dadosFamiliare)) {
            Flash::error('Dados Familiare not found');

            return redirect(route('dadosFamiliares.index'));
        }

        return view('dados_familiares.edit')->with('dadosFamiliare', $dadosFamiliare);
    }

    /**
     * Update the specified DadosFamiliare in storage.
     *
     * @param  int              $id
     * @param UpdateDadosFamiliareRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDadosFamiliareRequest $request)
    {
        $dadosFamiliare = $this->dadosFamiliareRepository->findWithoutFail($id);

        if (empty($dadosFamiliare)) {
            Flash::error('Dados Familiare not found');

            return redirect(route('dadosFamiliares.index'));
        }

        $dadosFamiliare = $this->dadosFamiliareRepository->update($request->all(), $id);

        Flash::success('Dados Familiare updated successfully.');

        return redirect(route('dadosFamiliares.index'));
    }

    /**
     * Remove the specified DadosFamiliare from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dadosFamiliare = $this->dadosFamiliareRepository->findWithoutFail($id);

        if (empty($dadosFamiliare)) {
            Flash::error('Dados Familiare not found');

            return redirect(route('dadosFamiliares.index'));
        }

        $this->dadosFamiliareRepository->delete($id);

        Flash::success('Dados Familiare deleted successfully.');

        return redirect(route('dadosFamiliares.index'));
    }
}
