<?php

namespace App\Http\Controllers;

use App\Models\usertransaction;
use App\Http\Requests\StoreusertransactionRequest;
use App\Http\Requests\UpdateusertransactionRequest;

class UsertransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usertransaction', [
            'usertransaction' => usertransaction::all()
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
     * @param  \App\Http\Requests\StoreusertransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreusertransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usertransaction  $usertransaction
     * @return \Illuminate\Http\Response
     */
    public function show(usertransaction $usertransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usertransaction  $usertransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(usertransaction $usertransaction)
    {
        $usertransaction = usertransaction::all();

        return view('customer',[
            'usertransaction'=>$usertransaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusertransactionRequest  $request
     * @param  \App\Models\usertransaction  $usertransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateusertransactionRequest $request, usertransaction $usertransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usertransaction  $usertransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(usertransaction $usertransaction)
    {
        //
    }
}
