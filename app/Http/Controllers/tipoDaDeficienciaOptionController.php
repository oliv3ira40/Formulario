<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetipoDaDeficienciaOptionRequest;
use App\Http\Requests\UpdatetipoDaDeficienciaOptionRequest;
use App\Repositories\tipoDaDeficienciaOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class tipoDaDeficienciaOptionController extends AppBaseController
{
    /** @var  tipoDaDeficienciaOptionRepository */
    private $tipoDaDeficienciaOptionRepository;

    public function __construct(tipoDaDeficienciaOptionRepository $tipoDaDeficienciaOptionRepo)
    {
        $this->tipoDaDeficienciaOptionRepository = $tipoDaDeficienciaOptionRepo;
    }

    /**
     * Display a listing of the tipoDaDeficienciaOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tipoDaDeficienciaOptionRepository->pushCriteria(new RequestCriteria($request));
        $tipoDaDeficienciaOptions = $this->tipoDaDeficienciaOptionRepository->all();

        return view('tipo_da_deficiencia_options.index')
            ->with('tipoDaDeficienciaOptions', $tipoDaDeficienciaOptions);
    }

    /**
     * Show the form for creating a new tipoDaDeficienciaOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_da_deficiencia_options.create');
    }

    /**
     * Store a newly created tipoDaDeficienciaOption in storage.
     *
     * @param CreatetipoDaDeficienciaOptionRequest $request
     *
     * @return Response
     */
    public function store(CreatetipoDaDeficienciaOptionRequest $request)
    {
        $input = $request->all();

        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->create($input);

        Flash::success('Tipo Da Deficiencia Option saved successfully.');

        return redirect(route('tipoDaDeficienciaOptions.index'));
    }

    /**
     * Display the specified tipoDaDeficienciaOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->findWithoutFail($id);

        if (empty($tipoDaDeficienciaOption)) {
            Flash::error('Tipo Da Deficiencia Option not found');

            return redirect(route('tipoDaDeficienciaOptions.index'));
        }

        return view('tipo_da_deficiencia_options.show')->with('tipoDaDeficienciaOption', $tipoDaDeficienciaOption);
    }

    /**
     * Show the form for editing the specified tipoDaDeficienciaOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->findWithoutFail($id);

        if (empty($tipoDaDeficienciaOption)) {
            Flash::error('Tipo Da Deficiencia Option not found');

            return redirect(route('tipoDaDeficienciaOptions.index'));
        }

        return view('tipo_da_deficiencia_options.edit')->with('tipoDaDeficienciaOption', $tipoDaDeficienciaOption);
    }

    /**
     * Update the specified tipoDaDeficienciaOption in storage.
     *
     * @param  int              $id
     * @param UpdatetipoDaDeficienciaOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetipoDaDeficienciaOptionRequest $request)
    {
        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->findWithoutFail($id);

        if (empty($tipoDaDeficienciaOption)) {
            Flash::error('Tipo Da Deficiencia Option not found');

            return redirect(route('tipoDaDeficienciaOptions.index'));
        }

        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->update($request->all(), $id);

        Flash::success('Tipo Da Deficiencia Option updated successfully.');

        return redirect(route('tipoDaDeficienciaOptions.index'));
    }

    /**
     * Remove the specified tipoDaDeficienciaOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoDaDeficienciaOption = $this->tipoDaDeficienciaOptionRepository->findWithoutFail($id);

        if (empty($tipoDaDeficienciaOption)) {
            Flash::error('Tipo Da Deficiencia Option not found');

            return redirect(route('tipoDaDeficienciaOptions.index'));
        }

        $this->tipoDaDeficienciaOptionRepository->delete($id);

        Flash::success('Tipo Da Deficiencia Option deleted successfully.');

        return redirect(route('tipoDaDeficienciaOptions.index'));
    }
}
