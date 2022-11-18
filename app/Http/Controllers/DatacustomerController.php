<?php

namespace App\Http\Controllers;

use App\Models\datacustomer;
use App\Http\Requests\StoredatacustomerRequest;
use App\Http\Requests\UpdatedatacustomerRequest;

class DatacustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function datadawar()
    {
        $datacustomer = datacustomer::all();
        return view('datadawar',[
            'data_customer'=>$datacustomer
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
     * @param  \App\Http\Requests\StoredatacustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredatacustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datacustomer  $datacustomer
     * @return \Illuminate\Http\Response
     */
    public function show(datacustomer $datacustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datacustomer  $datacustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(datacustomer $datacustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedatacustomerRequest  $request
     * @param  \App\Models\datacustomer  $datacustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedatacustomerRequest $request, datacustomer $datacustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datacustomer  $datacustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(datacustomer $datacustomer)
    {
        //
    }
}
