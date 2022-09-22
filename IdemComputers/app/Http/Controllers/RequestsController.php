<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerequestsRequest;
use App\Http\Requests\UpdaterequestsRequest;
use App\Models\requests;

class RequestsController extends Controller
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
     * @param  \App\Http\Requests\StorerequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerequestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(requests $requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function edit(requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterequestsRequest  $request
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterequestsRequest $request, requests $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(requests $requests)
    {
        //
    }
}
