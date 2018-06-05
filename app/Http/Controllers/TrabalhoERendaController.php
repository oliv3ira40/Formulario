<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrabalhoERendaRequest;
use App\Http\Requests\UpdateTrabalhoERendaRequest;
use App\Repositories\TrabalhoERendaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TrabalhoERendaController extends AppBaseController
{
    /** @var  TrabalhoERendaRepository */
    private $trabalhoERendaRepository;

    public function __construct(TrabalhoERendaRepository $trabalhoERendaRepo)
    {
        $this->trabalhoERendaRepository = $trabalhoERendaRepo;
    }

    /**
     * Display a listing of the TrabalhoERenda.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->trabalhoERendaRepository->pushCriteria(new RequestCriteria($request));
        $trabalhoERendas = $this->trabalhoERendaRepository->all();

        return view('trabalho_e_rendas.index')
            ->with('trabalhoERendas', $trabalhoERendas);
    }

    /**
     * Show the form for creating a new TrabalhoERenda.
     *
     * @return Response
     */
    public function create()
    {
        return view('trabalho_e_rendas.create');
    }

    /**
     * Store a newly created TrabalhoERenda in storage.
     *
     * @param CreateTrabalhoERendaRequest $request
     *
     * @return Response
     */
    public function store(CreateTrabalhoERendaRequest $request)
    {
        $input = $request->all();

        $trabalhoERenda = $this->trabalhoERendaRepository->create($input);

        Flash::success('Trabalho E Renda saved successfully.');

        return redirect(route('trabalhoERendas.index'));
    }

    /**
     * Display the specified TrabalhoERenda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trabalhoERenda = $this->trabalhoERendaRepository->findWithoutFail($id);

        if (empty($trabalhoERenda)) {
            Flash::error('Trabalho E Renda not found');

            return redirect(route('trabalhoERendas.index'));
        }

        return view('trabalho_e_rendas.show')->with('trabalhoERenda', $trabalhoERenda);
    }

    /**
     * Show the form for editing the specified TrabalhoERenda.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trabalhoERenda = $this->trabalhoERendaRepository->findWithoutFail($id);

        if (empty($trabalhoERenda)) {
            Flash::error('Trabalho E Renda not found');

            return redirect(route('trabalhoERendas.index'));
        }

        return view('trabalho_e_rendas.edit')->with('trabalhoERenda', $trabalhoERenda);
    }

    /**
     * Update the specified TrabalhoERenda in storage.
     *
     * @param  int              $id
     * @param UpdateTrabalhoERendaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrabalhoERendaRequest $request)
    {
        $trabalhoERenda = $this->trabalhoERendaRepository->findWithoutFail($id);

        if (empty($trabalhoERenda)) {
            Flash::error('Trabalho E Renda not found');

            return redirect(route('trabalhoERendas.index'));
        }

        $trabalhoERenda = $this->trabalhoERendaRepository->update($request->all(), $id);

        Flash::success('Trabalho E Renda updated successfully.');

        return redirect(route('trabalhoERendas.index'));
    }

    /**
     * Remove the specified TrabalhoERenda from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trabalhoERenda = $this->trabalhoERendaRepository->findWithoutFail($id);

        if (empty($trabalhoERenda)) {
            Flash::error('Trabalho E Renda not found');

            return redirect(route('trabalhoERendas.index'));
        }

        $this->trabalhoERendaRepository->delete($id);

        Flash::success('Trabalho E Renda deleted successfully.');

        return redirect(route('trabalhoERendas.index'));
    }
}
