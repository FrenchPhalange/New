<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storerepairs_typesRequest;
use App\Http\Requests\Updaterepairs_typesRequest;
use App\Models\repairs_types;

class RepairsTypesController extends Controller
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
     * @param  \App\Http\Requests\Storerepairs_typesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerepairs_typesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\repairs_types  $repairs_types
     * @return \Illuminate\Http\Response
     */
    public function show(repairs_types $repairs_types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repairs_types  $repairs_types
     * @return \Illuminate\Http\Response
     */
    public function edit(repairs_types $repairs_types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterepairs_typesRequest  $request
     * @param  \App\Models\repairs_types  $repairs_types
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterepairs_typesRequest $request, repairs_types $repairs_types)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repairs_types  $repairs_types
     * @return \Illuminate\Http\Response
     */
    public function destroy(repairs_types $repairs_types)
    {
        //
    }
}
