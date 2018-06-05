<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadoCivilOptionRequest;
use App\Http\Requests\UpdateEstadoCivilOptionRequest;
use App\Repositories\EstadoCivilOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstadoCivilOptionController extends AppBaseController
{
    /** @var  EstadoCivilOptionRepository */
    private $estadoCivilOptionRepository;

    public function __construct(EstadoCivilOptionRepository $estadoCivilOptionRepo)
    {
        $this->estadoCivilOptionRepository = $estadoCivilOptionRepo;
    }

    /**
     * Display a listing of the EstadoCivilOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estadoCivilOptionRepository->pushCriteria(new RequestCriteria($request));
        $estadoCivilOptions = $this->estadoCivilOptionRepository->all();

        return view('estado_civil_options.index')
            ->with('estadoCivilOptions', $estadoCivilOptions);
    }

    /**
     * Show the form for creating a new EstadoCivilOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('estado_civil_options.create');
    }

    /**
     * Store a newly created EstadoCivilOption in storage.
     *
     * @param CreateEstadoCivilOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadoCivilOptionRequest $request)
    {
        $input = $request->all();

        $estadoCivilOption = $this->estadoCivilOptionRepository->create($input);

        Flash::success('Estado Civil Option saved successfully.');

        return redirect(route('estadoCivilOptions.index'));
    }

    /**
     * Display the specified EstadoCivilOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estadoCivilOption = $this->estadoCivilOptionRepository->findWithoutFail($id);

        if (empty($estadoCivilOption)) {
            Flash::error('Estado Civil Option not found');

            return redirect(route('estadoCivilOptions.index'));
        }

        return view('estado_civil_options.show')->with('estadoCivilOption', $estadoCivilOption);
    }

    /**
     * Show the form for editing the specified EstadoCivilOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estadoCivilOption = $this->estadoCivilOptionRepository->findWithoutFail($id);

        if (empty($estadoCivilOption)) {
            Flash::error('Estado Civil Option not found');

            return redirect(route('estadoCivilOptions.index'));
        }

        return view('estado_civil_options.edit')->with('estadoCivilOption', $estadoCivilOption);
    }

    /**
     * Update the specified EstadoCivilOption in storage.
     *
     * @param  int              $id
     * @param UpdateEstadoCivilOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadoCivilOptionRequest $request)
    {
        $estadoCivilOption = $this->estadoCivilOptionRepository->findWithoutFail($id);

        if (empty($estadoCivilOption)) {
            Flash::error('Estado Civil Option not found');

            return redirect(route('estadoCivilOptions.index'));
        }

        $estadoCivilOption = $this->estadoCivilOptionRepository->update($request->all(), $id);

        Flash::success('Estado Civil Option updated successfully.');

        return redirect(route('estadoCivilOptions.index'));
    }

    /**
     * Remove the specified EstadoCivilOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estadoCivilOption = $this->estadoCivilOptionRepository->findWithoutFail($id);

        if (empty($estadoCivilOption)) {
            Flash::error('Estado Civil Option not found');

            return redirect(route('estadoCivilOptions.index'));
        }

        $this->estadoCivilOptionRepository->delete($id);

        Flash::success('Estado Civil Option deleted successfully.');

        return redirect(route('estadoCivilOptions.index'));
    }
}
