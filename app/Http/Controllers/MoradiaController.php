<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMoradiaRequest;
use App\Http\Requests\UpdateMoradiaRequest;
use App\Repositories\MoradiaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MoradiaController extends AppBaseController
{
    /** @var  MoradiaRepository */
    private $moradiaRepository;

    public function __construct(MoradiaRepository $moradiaRepo)
    {
        $this->moradiaRepository = $moradiaRepo;
    }

    /**
     * Display a listing of the Moradia.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->moradiaRepository->pushCriteria(new RequestCriteria($request));
        $moradias = $this->moradiaRepository->all();

        return view('moradias.index')
            ->with('moradias', $moradias);
    }

    /**
     * Show the form for creating a new Moradia.
     *
     * @return Response
     */
    public function create()
    {
        return view('moradias.create');
    }

    /**
     * Store a newly created Moradia in storage.
     *
     * @param CreateMoradiaRequest $request
     *
     * @return Response
     */
    public function store(CreateMoradiaRequest $request)
    {
        $input = $request->all();

        $moradia = $this->moradiaRepository->create($input);

        Flash::success('Moradia saved successfully.');

        return redirect(route('moradias.index'));
    }

    /**
     * Display the specified Moradia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $moradia = $this->moradiaRepository->findWithoutFail($id);

        if (empty($moradia)) {
            Flash::error('Moradia not found');

            return redirect(route('moradias.index'));
        }

        return view('moradias.show')->with('moradia', $moradia);
    }

    /**
     * Show the form for editing the specified Moradia.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $moradia = $this->moradiaRepository->findWithoutFail($id);

        if (empty($moradia)) {
            Flash::error('Moradia not found');

            return redirect(route('moradias.index'));
        }

        return view('moradias.edit')->with('moradia', $moradia);
    }

    /**
     * Update the specified Moradia in storage.
     *
     * @param  int              $id
     * @param UpdateMoradiaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoradiaRequest $request)
    {
        $moradia = $this->moradiaRepository->findWithoutFail($id);

        if (empty($moradia)) {
            Flash::error('Moradia not found');

            return redirect(route('moradias.index'));
        }

        $moradia = $this->moradiaRepository->update($request->all(), $id);

        Flash::success('Moradia updated successfully.');

        return redirect(route('moradias.index'));
    }

    /**
     * Remove the specified Moradia from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $moradia = $this->moradiaRepository->findWithoutFail($id);

        if (empty($moradia)) {
            Flash::error('Moradia not found');

            return redirect(route('moradias.index'));
        }

        $this->moradiaRepository->delete($id);

        Flash::success('Moradia deleted successfully.');

        return redirect(route('moradias.index'));
    }
}
