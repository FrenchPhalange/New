<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerepairsRequest;
use App\Http\Requests\UpdaterepairsRequest;
use App\Models\repairs;

class RepairsController extends Controller
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
     * @param  \App\Http\Requests\StorerepairsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerepairsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function show(repairs $repairs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function edit(repairs $repairs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterepairsRequest  $request
     * @param  \App\Models\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterepairsRequest $request, repairs $repairs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repairs  $repairs
     * @return \Illuminate\Http\Response
     */
    public function destroy(repairs $repairs)
    {
        //
    }
}
