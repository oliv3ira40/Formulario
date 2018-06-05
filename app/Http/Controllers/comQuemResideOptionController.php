<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecomQuemResideOptionRequest;
use App\Http\Requests\UpdatecomQuemResideOptionRequest;
use App\Repositories\comQuemResideOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class comQuemResideOptionController extends AppBaseController
{
    /** @var  comQuemResideOptionRepository */
    private $comQuemResideOptionRepository;

    public function __construct(comQuemResideOptionRepository $comQuemResideOptionRepo)
    {
        $this->comQuemResideOptionRepository = $comQuemResideOptionRepo;
    }

    /**
     * Display a listing of the comQuemResideOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comQuemResideOptionRepository->pushCriteria(new RequestCriteria($request));
        $comQuemResideOptions = $this->comQuemResideOptionRepository->all();

        return view('com_quem_reside_options.index')
            ->with('comQuemResideOptions', $comQuemResideOptions);
    }

    /**
     * Show the form for creating a new comQuemResideOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('com_quem_reside_options.create');
    }

    /**
     * Store a newly created comQuemResideOption in storage.
     *
     * @param CreatecomQuemResideOptionRequest $request
     *
     * @return Response
     */
    public function store(CreatecomQuemResideOptionRequest $request)
    {
        $input = $request->all();

        $comQuemResideOption = $this->comQuemResideOptionRepository->create($input);

        Flash::success('Com Quem Reside Option saved successfully.');

        return redirect(route('comQuemResideOptions.index'));
    }

    /**
     * Display the specified comQuemResideOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comQuemResideOption = $this->comQuemResideOptionRepository->findWithoutFail($id);

        if (empty($comQuemResideOption)) {
            Flash::error('Com Quem Reside Option not found');

            return redirect(route('comQuemResideOptions.index'));
        }

        return view('com_quem_reside_options.show')->with('comQuemResideOption', $comQuemResideOption);
    }

    /**
     * Show the form for editing the specified comQuemResideOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comQuemResideOption = $this->comQuemResideOptionRepository->findWithoutFail($id);

        if (empty($comQuemResideOption)) {
            Flash::error('Com Quem Reside Option not found');

            return redirect(route('comQuemResideOptions.index'));
        }

        return view('com_quem_reside_options.edit')->with('comQuemResideOption', $comQuemResideOption);
    }

    /**
     * Update the specified comQuemResideOption in storage.
     *
     * @param  int              $id
     * @param UpdatecomQuemResideOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecomQuemResideOptionRequest $request)
    {
        $comQuemResideOption = $this->comQuemResideOptionRepository->findWithoutFail($id);

        if (empty($comQuemResideOption)) {
            Flash::error('Com Quem Reside Option not found');

            return redirect(route('comQuemResideOptions.index'));
        }

        $comQuemResideOption = $this->comQuemResideOptionRepository->update($request->all(), $id);

        Flash::success('Com Quem Reside Option updated successfully.');

        return redirect(route('comQuemResideOptions.index'));
    }

    /**
     * Remove the specified comQuemResideOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comQuemResideOption = $this->comQuemResideOptionRepository->findWithoutFail($id);

        if (empty($comQuemResideOption)) {
            Flash::error('Com Quem Reside Option not found');

            return redirect(route('comQuemResideOptions.index'));
        }

        $this->comQuemResideOptionRepository->delete($id);

        Flash::success('Com Quem Reside Option deleted successfully.');

        return redirect(route('comQuemResideOptions.index'));
    }
}
