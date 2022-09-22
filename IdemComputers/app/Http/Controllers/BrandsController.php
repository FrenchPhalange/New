<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebrandsRequest;
use App\Http\Requests\UpdatebrandsRequest;
use App\Models\brands;

class BrandsController extends Controller
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
     * @param  \App\Http\Requests\StorebrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebrandsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(brands $brands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit(brands $brands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebrandsRequest  $request
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebrandsRequest $request, brands $brands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy(brands $brands)
    {
        //
    }
}
