<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerepairersRequest;
use App\Http\Requests\UpdaterepairersRequest;
use App\Models\repairers;

class RepairersController extends Controller
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
     * @param  \App\Http\Requests\StorerepairersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerepairersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\repairers  $repairers
     * @return \Illuminate\Http\Response
     */
    public function show(repairers $repairers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repairers  $repairers
     * @return \Illuminate\Http\Response
     */
    public function edit(repairers $repairers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterepairersRequest  $request
     * @param  \App\Models\repairers  $repairers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterepairersRequest $request, repairers $repairers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repairers  $repairers
     * @return \Illuminate\Http\Response
     */
    public function destroy(repairers $repairers)
    {
        //
    }
}
