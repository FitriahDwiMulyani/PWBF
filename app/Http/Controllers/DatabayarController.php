<?php

namespace App\Http\Controllers;

use App\Models\databayar;
use App\Http\Requests\StoredatabayarRequest;
use App\Http\Requests\UpdatedatabayarRequest;

class DatabayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('databayar', [
            'dataBayars' => databayar::all()
        ]);
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
     * @param  \App\Http\Requests\StoredatabayarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredatabayarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\databayar  $databayar
     * @return \Illuminate\Http\Response
     */
    public function show(databayar $databayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\databayar  $databayar
     * @return \Illuminate\Http\Response
     */
    public function edit(databayar $databayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedatabayarRequest  $request
     * @param  \App\Models\databayar  $databayar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedatabayarRequest $request, databayar $databayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\databayar  $databayar
     * @return \Illuminate\Http\Response
     */
    public function destroy(databayar $databayar)
    {
        //
    }
}
