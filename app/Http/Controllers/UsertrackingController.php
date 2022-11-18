<?php

namespace App\Http\Controllers;

use App\Models\usertracking;
use App\Http\Requests\StoreusertrackingRequest;
use App\Http\Requests\UpdateusertrackingRequest;

class UsertrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usertracking', [
            'usertracking' => usertracking::all()
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
     * @param  \App\Http\Requests\StoreusertrackingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreusertrackingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usertracking  $usertracking
     * @return \Illuminate\Http\Response
     */
    public function show(usertracking $usertracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usertracking  $usertracking
     * @return \Illuminate\Http\Response
     */
    public function edit(usertracking $usertracking)
    {
        $usertracking = usertracking::all();

        return view('customer',[
            'usertracking'=>$usertracking
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusertrackingRequest  $request
     * @param  \App\Models\usertracking  $usertracking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateusertrackingRequest $request, usertracking $usertracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usertracking  $usertracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(usertracking $usertracking)
    {
        //
    }
}

