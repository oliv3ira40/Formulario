<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSexoOptionRequest;
use App\Http\Requests\UpdateSexoOptionRequest;
use App\Repositories\SexoOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SexoOptionController extends AppBaseController
{
    /** @var  SexoOptionRepository */
    private $sexoOptionRepository;

    public function __construct(SexoOptionRepository $sexoOptionRepo)
    {
        $this->sexoOptionRepository = $sexoOptionRepo;
    }

    /**
     * Display a listing of the SexoOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sexoOptionRepository->pushCriteria(new RequestCriteria($request));
        $sexoOptions = $this->sexoOptionRepository->all();

        return view('sexo_options.index')
            ->with('sexoOptions', $sexoOptions);
    }

    /**
     * Show the form for creating a new SexoOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('sexo_options.create');
    }

    /**
     * Store a newly created SexoOption in storage.
     *
     * @param CreateSexoOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateSexoOptionRequest $request)
    {
        $input = $request->all();

        $sexoOption = $this->sexoOptionRepository->create($input);

        Flash::success('Sexo Option saved successfully.');

        return redirect(route('sexoOptions.index'));
    }

    /**
     * Display the specified SexoOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sexoOption = $this->sexoOptionRepository->findWithoutFail($id);

        if (empty($sexoOption)) {
            Flash::error('Sexo Option not found');

            return redirect(route('sexoOptions.index'));
        }

        return view('sexo_options.show')->with('sexoOption', $sexoOption);
    }

    /**
     * Show the form for editing the specified SexoOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sexoOption = $this->sexoOptionRepository->findWithoutFail($id);

        if (empty($sexoOption)) {
            Flash::error('Sexo Option not found');

            return redirect(route('sexoOptions.index'));
        }

        return view('sexo_options.edit')->with('sexoOption', $sexoOption);
    }

    /**
     * Update the specified SexoOption in storage.
     *
     * @param  int              $id
     * @param UpdateSexoOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSexoOptionRequest $request)
    {
        $sexoOption = $this->sexoOptionRepository->findWithoutFail($id);

        if (empty($sexoOption)) {
            Flash::error('Sexo Option not found');

            return redirect(route('sexoOptions.index'));
        }

        $sexoOption = $this->sexoOptionRepository->update($request->all(), $id);

        Flash::success('Sexo Option updated successfully.');

        return redirect(route('sexoOptions.index'));
    }

    /**
     * Remove the specified SexoOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sexoOption = $this->sexoOptionRepository->findWithoutFail($id);

        if (empty($sexoOption)) {
            Flash::error('Sexo Option not found');

            return redirect(route('sexoOptions.index'));
        }

        $this->sexoOptionRepository->delete($id);

        Flash::success('Sexo Option deleted successfully.');

        return redirect(route('sexoOptions.index'));
    }
}
