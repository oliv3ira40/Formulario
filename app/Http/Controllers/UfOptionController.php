<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUfOptionRequest;
use App\Http\Requests\UpdateUfOptionRequest;
use App\Repositories\UfOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UfOptionController extends AppBaseController
{
    /** @var  UfOptionRepository */
    private $ufOptionRepository;

    public function __construct(UfOptionRepository $ufOptionRepo)
    {
        $this->ufOptionRepository = $ufOptionRepo;
    }

    /**
     * Display a listing of the UfOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->ufOptionRepository->pushCriteria(new RequestCriteria($request));
        $ufOptions = $this->ufOptionRepository->all();

        return view('uf_options.index')
            ->with('ufOptions', $ufOptions);
    }

    /**
     * Show the form for creating a new UfOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('uf_options.create');
    }

    /**
     * Store a newly created UfOption in storage.
     *
     * @param CreateUfOptionRequest $request
     *
     * @return Response
     */
    public function store(CreateUfOptionRequest $request)
    {
        $input = $request->all();

        $ufOption = $this->ufOptionRepository->create($input);

        Flash::success('Uf Option saved successfully.');

        return redirect(route('ufOptions.index'));
    }

    /**
     * Display the specified UfOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ufOption = $this->ufOptionRepository->findWithoutFail($id);

        if (empty($ufOption)) {
            Flash::error('Uf Option not found');

            return redirect(route('ufOptions.index'));
        }

        return view('uf_options.show')->with('ufOption', $ufOption);
    }

    /**
     * Show the form for editing the specified UfOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ufOption = $this->ufOptionRepository->findWithoutFail($id);

        if (empty($ufOption)) {
            Flash::error('Uf Option not found');

            return redirect(route('ufOptions.index'));
        }

        return view('uf_options.edit')->with('ufOption', $ufOption);
    }

    /**
     * Update the specified UfOption in storage.
     *
     * @param  int              $id
     * @param UpdateUfOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUfOptionRequest $request)
    {
        $ufOption = $this->ufOptionRepository->findWithoutFail($id);

        if (empty($ufOption)) {
            Flash::error('Uf Option not found');

            return redirect(route('ufOptions.index'));
        }

        $ufOption = $this->ufOptionRepository->update($request->all(), $id);

        Flash::success('Uf Option updated successfully.');

        return redirect(route('ufOptions.index'));
    }

    /**
     * Remove the specified UfOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ufOption = $this->ufOptionRepository->findWithoutFail($id);

        if (empty($ufOption)) {
            Flash::error('Uf Option not found');

            return redirect(route('ufOptions.index'));
        }

        $this->ufOptionRepository->delete($id);

        Flash::success('Uf Option deleted successfully.');

        return redirect(route('ufOptions.index'));
    }
}
