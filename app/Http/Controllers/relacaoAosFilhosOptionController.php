<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterelacaoAosFilhosOptionRequest;
use App\Http\Requests\UpdaterelacaoAosFilhosOptionRequest;
use App\Repositories\relacaoAosFilhosOptionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class relacaoAosFilhosOptionController extends AppBaseController
{
    /** @var  relacaoAosFilhosOptionRepository */
    private $relacaoAosFilhosOptionRepository;

    public function __construct(relacaoAosFilhosOptionRepository $relacaoAosFilhosOptionRepo)
    {
        $this->relacaoAosFilhosOptionRepository = $relacaoAosFilhosOptionRepo;
    }

    /**
     * Display a listing of the relacaoAosFilhosOption.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->relacaoAosFilhosOptionRepository->pushCriteria(new RequestCriteria($request));
        $relacaoAosFilhosOptions = $this->relacaoAosFilhosOptionRepository->all();

        return view('relacao_aos_filhos_options.index')
            ->with('relacaoAosFilhosOptions', $relacaoAosFilhosOptions);
    }

    /**
     * Show the form for creating a new relacaoAosFilhosOption.
     *
     * @return Response
     */
    public function create()
    {
        return view('relacao_aos_filhos_options.create');
    }

    /**
     * Store a newly created relacaoAosFilhosOption in storage.
     *
     * @param CreaterelacaoAosFilhosOptionRequest $request
     *
     * @return Response
     */
    public function store(CreaterelacaoAosFilhosOptionRequest $request)
    {
        $input = $request->all();

        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->create($input);

        Flash::success('Relacao Aos Filhos Option saved successfully.');

        return redirect(route('relacaoAosFilhosOptions.index'));
    }

    /**
     * Display the specified relacaoAosFilhosOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->findWithoutFail($id);

        if (empty($relacaoAosFilhosOption)) {
            Flash::error('Relacao Aos Filhos Option not found');

            return redirect(route('relacaoAosFilhosOptions.index'));
        }

        return view('relacao_aos_filhos_options.show')->with('relacaoAosFilhosOption', $relacaoAosFilhosOption);
    }

    /**
     * Show the form for editing the specified relacaoAosFilhosOption.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->findWithoutFail($id);

        if (empty($relacaoAosFilhosOption)) {
            Flash::error('Relacao Aos Filhos Option not found');

            return redirect(route('relacaoAosFilhosOptions.index'));
        }

        return view('relacao_aos_filhos_options.edit')->with('relacaoAosFilhosOption', $relacaoAosFilhosOption);
    }

    /**
     * Update the specified relacaoAosFilhosOption in storage.
     *
     * @param  int              $id
     * @param UpdaterelacaoAosFilhosOptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterelacaoAosFilhosOptionRequest $request)
    {
        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->findWithoutFail($id);

        if (empty($relacaoAosFilhosOption)) {
            Flash::error('Relacao Aos Filhos Option not found');

            return redirect(route('relacaoAosFilhosOptions.index'));
        }

        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->update($request->all(), $id);

        Flash::success('Relacao Aos Filhos Option updated successfully.');

        return redirect(route('relacaoAosFilhosOptions.index'));
    }

    /**
     * Remove the specified relacaoAosFilhosOption from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relacaoAosFilhosOption = $this->relacaoAosFilhosOptionRepository->findWithoutFail($id);

        if (empty($relacaoAosFilhosOption)) {
            Flash::error('Relacao Aos Filhos Option not found');

            return redirect(route('relacaoAosFilhosOptions.index'));
        }

        $this->relacaoAosFilhosOptionRepository->delete($id);

        Flash::success('Relacao Aos Filhos Option deleted successfully.');

        return redirect(route('relacaoAosFilhosOptions.index'));
    }
}
