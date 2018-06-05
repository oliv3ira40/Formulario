<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNacionalidadeOptionRequest;
use App\Http\Requests\UpdateNacionalidadeOptionRequest;
use App\Repositories\NacionalidadeOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NacionalidadeOptionController extends AppBaseController
{
    /** @var  NacionalidadeOptionRepository */
    private $nacionalidadeOptionRepository;

    public function __construct(NacionalidadeOptionRepository $nacionalidadeOptionRepo)
    {
        $this->nacionalidadeOptionRepository = $nacionalidadeOptionRepo;
    }

    /**
     * Display a listing of the NacionalidadeOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->nacionalidadeOptionRepository->pushCriteria(new RequestCriteria($request));
        $nacionalidadeOptions = $this->nacionalidadeOptionRepository->all();

        return view('nacionalidade_options.index')
            ->with('nacionalidadeOptions', $nacionalidadeOptions);
    }

    /**
     * Show the form for creating a new NacionalidadeOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('nacionalidade_options.create');
    }

    /**
     * Store a newly created NacionalidadeOption in storage.
     *
     * @param CreateNacionalidadeOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateNacionalidadeOptionRequest $request)
    {
        $input = $request->all();

        $nacionalidadeOption = $this->nacionalidadeOptionRepository->create($input);

        Flash::success('Nacionalidade Option saved successfully.');

        return redirect(route('nacionalidadeOptions.index'));
    }

    /**
     * Display the specified NacionalidadeOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nacionalidadeOption = $this->nacionalidadeOptionRepository->findWithoutFail($id);

        if (empty($nacionalidadeOption)) {
            Flash::error('Nacionalidade Option not found');

            return redirect(route('nacionalidadeOptions.index'));
        }

        return view('nacionalidade_options.show')->with('nacionalidadeOption', $nacionalidadeOption);
    }

    /**
     * Show the form for editing the specified NacionalidadeOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nacionalidadeOption = $this->nacionalidadeOptionRepository->findWithoutFail($id);

        if (empty($nacionalidadeOption)) {
            Flash::error('Nacionalidade Option not found');

            return redirect(route('nacionalidadeOptions.index'));
        }

        return view('nacionalidade_options.edit')->with('nacionalidadeOption', $nacionalidadeOption);
    }

    /**
     * Update the specified NacionalidadeOption in storage.
     *
     * @param  int              $id
     * @param UpdateNacionalidadeOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNacionalidadeOptionRequest $request)
    {
        $nacionalidadeOption = $this->nacionalidadeOptionRepository->findWithoutFail($id);

        if (empty($nacionalidadeOption)) {
            Flash::error('Nacionalidade Option not found');

            return redirect(route('nacionalidadeOptions.index'));
        }

        $nacionalidadeOption = $this->nacionalidadeOptionRepository->update($request->all(), $id);

        Flash::success('Nacionalidade Option updated successfully.');

        return redirect(route('nacionalidadeOptions.index'));
    }

    /**
     * Remove the specified NacionalidadeOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nacionalidadeOption = $this->nacionalidadeOptionRepository->findWithoutFail($id);

        if (empty($nacionalidadeOption)) {
            Flash::error('Nacionalidade Option not found');

            return redirect(route('nacionalidadeOptions.index'));
        }

        $this->nacionalidadeOptionRepository->delete($id);

        Flash::success('Nacionalidade Option deleted successfully.');

        return redirect(route('nacionalidadeOptions.index'));
    }
}
