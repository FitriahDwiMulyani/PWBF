<?php

namespace App\Http\Controllers;

use App\Models\usersendmytrash;
use App\Http\Requests\StoreusersendmytrashRequest;
use App\Http\Requests\UpdateusersendmytrashRequest;

class UsersendmytrashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usersendmytrash', [
            'usersendmytrash' => usersendmytrash::all()
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
     * @param  \App\Http\Requests\StoreusersendmytrashRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreusersendmytrashRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usersendmytrash  $usersendmytrash
     * @return \Illuminate\Http\Response
     */
    public function show(usersendmytrash $usersendmytrash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usersendmytrash  $usersendmytrash
     * @return \Illuminate\Http\Response
     */
    public function edit(usersendmytrash $usersendmytrash)
    {
        $usersendmytrash = usersendmytrash::all();

        return view('customer',[
            'usersendmhytrash'=>$usersendmytrash
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateusersendmytrashRequest  $request
     * @param  \App\Models\usersendmytrash  $usersendmytrash
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateusersendmytrashRequest $request, usersendmytrash $usersendmytrash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usersendmytrash  $usersendmytrash
     * @return \Illuminate\Http\Response
     */
    public function destroy(usersendmytrash $usersendmytrash)
    {
        //
    }
}


