<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storecomputers_componentsRequest;
use App\Http\Requests\Updatecomputers_componentsRequest;
use App\Models\computers_components;

class ComputersComponentsController extends Controller
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
     * @param  \App\Http\Requests\Storecomputers_componentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storecomputers_componentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\computers_components  $computers_components
     * @return \Illuminate\Http\Response
     */
    public function show(computers_components $computers_components)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\computers_components  $computers_components
     * @return \Illuminate\Http\Response
     */
    public function edit(computers_components $computers_components)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatecomputers_componentsRequest  $request
     * @param  \App\Models\computers_components  $computers_components
     * @return \Illuminate\Http\Response
     */
    public function update(Updatecomputers_componentsRequest $request, computers_components $computers_components)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\computers_components  $computers_components
     * @return \Illuminate\Http\Response
     */
    public function destroy(computers_components $computers_components)
    {
        //
    }
}
