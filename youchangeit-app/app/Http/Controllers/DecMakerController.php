<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDecmakerRequest;
use App\Http\Requests\UpdateDecmakerRequest;
use App\Models\Decmaker;

class DecmakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDecmakerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Decmaker $decmaker)
    {
        return 'Sono il metodo show di decMaker ' . $decmaker;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Decmaker $decmaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDecmakerRequest $request, Decmaker $decmaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Decmaker $decmaker)
    {
        //
    }
}
