<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCidadeRequest;
use App\Http\Requests\UpdateCidadeRequest;
use App\Models\Cidade;
use App\Services\CidadeService;

class CidadeController extends Controller
{

    protected $cidadeService;

    public function __construct(CidadeService $cidadeService)
    {
        $this->cidadeService = $cidadeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json($this->cidadeService->all(), 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listMedicos(Cidade $id_cidade)
    {
        return response()->json($this->cidadeService->find($id_cidade->id)->medicos, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCidadeRequest  $request
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCidadeRequest $request, Cidade $cidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
