<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEscolaridadeOptionRequest;
use App\Http\Requests\UpdateEscolaridadeOptionRequest;
use App\Repositories\EscolaridadeOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EscolaridadeOptionController extends AppBaseController
{
    /** @var  EscolaridadeOptionRepository */
    private $escolaridadeOptionRepository;

    public function __construct(EscolaridadeOptionRepository $escolaridadeOptionRepo)
    {
        $this->escolaridadeOptionRepository = $escolaridadeOptionRepo;
    }

    /**
     * Display a listing of the EscolaridadeOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->escolaridadeOptionRepository->pushCriteria(new RequestCriteria($request));
        $escolaridadeOptions = $this->escolaridadeOptionRepository->all();

        return view('escolaridade_options.index')
            ->with('escolaridadeOptions', $escolaridadeOptions);
    }

    /**
     * Show the form for creating a new EscolaridadeOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('escolaridade_options.create');
    }

    /**
     * Store a newly created EscolaridadeOption in storage.
     *
     * @param CreateEscolaridadeOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateEscolaridadeOptionRequest $request)
    {
        $input = $request->all();

        $escolaridadeOption = $this->escolaridadeOptionRepository->create($input);

        Flash::success('Escolaridade Option saved successfully.');

        return redirect(route('escolaridadeOptions.index'));
    }

    /**
     * Display the specified EscolaridadeOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $escolaridadeOption = $this->escolaridadeOptionRepository->findWithoutFail($id);

        if (empty($escolaridadeOption)) {
            Flash::error('Escolaridade Option not found');

            return redirect(route('escolaridadeOptions.index'));
        }

        return view('escolaridade_options.show')->with('escolaridadeOption', $escolaridadeOption);
    }

    /**
     * Show the form for editing the specified EscolaridadeOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $escolaridadeOption = $this->escolaridadeOptionRepository->findWithoutFail($id);

        if (empty($escolaridadeOption)) {
            Flash::error('Escolaridade Option not found');

            return redirect(route('escolaridadeOptions.index'));
        }

        return view('escolaridade_options.edit')->with('escolaridadeOption', $escolaridadeOption);
    }

    /**
     * Update the specified EscolaridadeOption in storage.
     *
     * @param  int              $id
     * @param UpdateEscolaridadeOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEscolaridadeOptionRequest $request)
    {
        $escolaridadeOption = $this->escolaridadeOptionRepository->findWithoutFail($id);

        if (empty($escolaridadeOption)) {
            Flash::error('Escolaridade Option not found');

            return redirect(route('escolaridadeOptions.index'));
        }

        $escolaridadeOption = $this->escolaridadeOptionRepository->update($request->all(), $id);

        Flash::success('Escolaridade Option updated successfully.');

        return redirect(route('escolaridadeOptions.index'));
    }

    /**
     * Remove the specified EscolaridadeOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $escolaridadeOption = $this->escolaridadeOptionRepository->findWithoutFail($id);

        if (empty($escolaridadeOption)) {
            Flash::error('Escolaridade Option not found');

            return redirect(route('escolaridadeOptions.index'));
        }

        $this->escolaridadeOptionRepository->delete($id);

        Flash::success('Escolaridade Option deleted successfully.');

        return redirect(route('escolaridadeOptions.index'));
    }
}
