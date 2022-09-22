<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebreakdownsRequest;
use App\Http\Requests\UpdatebreakdownsRequest;
use App\Models\breakdowns;

class BreakdownsController extends Controller
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
     * @param  \App\Http\Requests\StorebreakdownsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebreakdownsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\breakdowns  $breakdowns
     * @return \Illuminate\Http\Response
     */
    public function show(breakdowns $breakdowns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\breakdowns  $breakdowns
     * @return \Illuminate\Http\Response
     */
    public function edit(breakdowns $breakdowns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebreakdownsRequest  $request
     * @param  \App\Models\breakdowns  $breakdowns
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebreakdownsRequest $request, breakdowns $breakdowns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\breakdowns  $breakdowns
     * @return \Illuminate\Http\Response
     */
    public function destroy(breakdowns $breakdowns)
    {
        //
    }
}
