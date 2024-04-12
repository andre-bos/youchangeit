<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetitionRequest;
use App\Http\Requests\UpdatePetitionRequest;
use App\Models\Petition;

class PetitionController extends Controller
{

    /**
     * Applico il middleware auth a tutte le rotte relative ai metodi che devono essere protetti tranne index e show
     */

     public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']); 
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return "Sono il metodo index di petitions --PUBBLICO";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return "Sono il metodo create di petitions --AUTENTICATO";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetitionRequest $request)
    {
        //

        return "Sono il metodo store di petitions --AUTENTICATO";
    }

    /**
     * Display the specified resource.
     */
    public function show(Petition $petition)
    {
        //

        return "Sono il metodo show di petitions --NON AUTENTICATO";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petition $petition)
    {
        //

        return "Sono il metodo edit di petitions --AUTENTICATO";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetitionRequest $request, Petition $petition)
    {
        // // Per adesso, lo ignoro perché non sto facendo chiamate AJAX
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petition $petition)
    {
        // Per adesso, lo ignoro perché non sto facendo chiamate AJAX
    }
}
