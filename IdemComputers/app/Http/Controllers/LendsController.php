<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelendsRequest;
use App\Http\Requests\UpdatelendsRequest;
use App\Models\lends;

class LendsController extends Controller
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
     * @param  \App\Http\Requests\StorelendsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelendsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lends  $lends
     * @return \Illuminate\Http\Response
     */
    public function show(lends $lends)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lends  $lends
     * @return \Illuminate\Http\Response
     */
    public function edit(lends $lends)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelendsRequest  $request
     * @param  \App\Models\lends  $lends
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelendsRequest $request, lends $lends)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lends  $lends
     * @return \Illuminate\Http\Response
     */
    public function destroy(lends $lends)
    {
        //
    }
}
