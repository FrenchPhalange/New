<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storerepairs_breakdownsRequest;
use App\Http\Requests\Updaterepairs_breakdownsRequest;
use App\Models\repairs_breakdowns;

class RepairsBreakdownsController extends Controller
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
     * @param  \App\Http\Requests\Storerepairs_breakdownsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerepairs_breakdownsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\repairs_breakdowns  $repairs_breakdowns
     * @return \Illuminate\Http\Response
     */
    public function show(repairs_breakdowns $repairs_breakdowns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\repairs_breakdowns  $repairs_breakdowns
     * @return \Illuminate\Http\Response
     */
    public function edit(repairs_breakdowns $repairs_breakdowns)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterepairs_breakdownsRequest  $request
     * @param  \App\Models\repairs_breakdowns  $repairs_breakdowns
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterepairs_breakdownsRequest $request, repairs_breakdowns $repairs_breakdowns)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\repairs_breakdowns  $repairs_breakdowns
     * @return \Illuminate\Http\Response
     */
    public function destroy(repairs_breakdowns $repairs_breakdowns)
    {
        //
    }
}
