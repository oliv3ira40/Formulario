<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedoencaCronicaOptionRequest;
use App\Http\Requests\UpdatedoencaCronicaOptionRequest;
use App\Repositories\doencaCronicaOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class doencaCronicaOptionController extends AppBaseController
{
    /** @var  doencaCronicaOptionRepository */
    private $doencaCronicaOptionRepository;

    public function __construct(doencaCronicaOptionRepository $doencaCronicaOptionRepo)
    {
        $this->doencaCronicaOptionRepository = $doencaCronicaOptionRepo;
    }

    /**
     * Display a listing of the doencaCronicaOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->doencaCronicaOptionRepository->pushCriteria(new RequestCriteria($request));
        $doencaCronicaOptions = $this->doencaCronicaOptionRepository->all();

        return view('doenca_cronica_options.index')
            ->with('doencaCronicaOptions', $doencaCronicaOptions);
    }

    /**
     * Show the form for creating a new doencaCronicaOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('doenca_cronica_options.create');
    }

    /**
     * Store a newly created doencaCronicaOption in storage.
     *
     * @param CreatedoencaCronicaOptionRequest $request
     *
     * @return Response
     */
    public function store(CreatedoencaCronicaOptionRequest $request)
    {
        $input = $request->all();

        $doencaCronicaOption = $this->doencaCronicaOptionRepository->create($input);

        Flash::success('Doenca Cronica Option saved successfully.');

        return redirect(route('doencaCronicaOptions.index'));
    }

    /**
     * Display the specified doencaCronicaOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doencaCronicaOption = $this->doencaCronicaOptionRepository->findWithoutFail($id);

        if (empty($doencaCronicaOption)) {
            Flash::error('Doenca Cronica Option not found');

            return redirect(route('doencaCronicaOptions.index'));
        }

        return view('doenca_cronica_options.show')->with('doencaCronicaOption', $doencaCronicaOption);
    }

    /**
     * Show the form for editing the specified doencaCronicaOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doencaCronicaOption = $this->doencaCronicaOptionRepository->findWithoutFail($id);

        if (empty($doencaCronicaOption)) {
            Flash::error('Doenca Cronica Option not found');

            return redirect(route('doencaCronicaOptions.index'));
        }

        return view('doenca_cronica_options.edit')->with('doencaCronicaOption', $doencaCronicaOption);
    }

    /**
     * Update the specified doencaCronicaOption in storage.
     *
     * @param  int              $id
     * @param UpdatedoencaCronicaOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedoencaCronicaOptionRequest $request)
    {
        $doencaCronicaOption = $this->doencaCronicaOptionRepository->findWithoutFail($id);

        if (empty($doencaCronicaOption)) {
            Flash::error('Doenca Cronica Option not found');

            return redirect(route('doencaCronicaOptions.index'));
        }

        $doencaCronicaOption = $this->doencaCronicaOptionRepository->update($request->all(), $id);

        Flash::success('Doenca Cronica Option updated successfully.');

        return redirect(route('doencaCronicaOptions.index'));
    }

    /**
     * Remove the specified doencaCronicaOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doencaCronicaOption = $this->doencaCronicaOptionRepository->findWithoutFail($id);

        if (empty($doencaCronicaOption)) {
            Flash::error('Doenca Cronica Option not found');

            return redirect(route('doencaCronicaOptions.index'));
        }

        $this->doencaCronicaOptionRepository->delete($id);

        Flash::success('Doenca Cronica Option deleted successfully.');

        return redirect(route('doencaCronicaOptions.index'));
    }
}
