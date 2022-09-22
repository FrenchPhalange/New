<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecomponentsRequest;
use App\Http\Requests\UpdatecomponentsRequest;
use App\Models\components;

class ComponentsController extends Controller
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
     * @param  \App\Http\Requests\StorecomponentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecomponentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\components  $components
     * @return \Illuminate\Http\Response
     */
    public function show(components $components)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\components  $components
     * @return \Illuminate\Http\Response
     */
    public function edit(components $components)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecomponentsRequest  $request
     * @param  \App\Models\components  $components
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecomponentsRequest $request, components $components)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\components  $components
     * @return \Illuminate\Http\Response
     */
    public function destroy(components $components)
    {
        //
    }
}
