<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecomputersRequest;
use App\Http\Requests\UpdatecomputersRequest;
use App\Models\computers;

class ComputersController extends Controller
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
     * @param  \App\Http\Requests\StorecomputersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecomputersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function show(computers $computers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function edit(computers $computers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecomputersRequest  $request
     * @param  \App\Models\computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecomputersRequest $request, computers $computers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\computers  $computers
     * @return \Illuminate\Http\Response
     */
    public function destroy(computers $computers)
    {
        //
    }
}
