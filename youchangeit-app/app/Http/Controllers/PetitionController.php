<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePetitionRequest;
use App\Http\Requests\UpdatePetitionRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Petition;
use Illuminate\Http\Request;

class PetitionController extends Controller
{

    /**
     * Applico il middleware auth a tutte le rotte relative ai metodi che devono essere protetti tranne index e show
     */

     public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'indexLatest']); 
    }

    /**
     * Display a listing of the latest 5 active petitions.
     */
    public function indexLatest()
    {
        //

        $petitions = Petition::with('user', 'category', 'decMaker')
        ->withCount('signatures')
        ->where('status', 'attiva')
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get(); // Prendo solo le prime 5 petizioni attive, le ordino in ordine decrescente di creazione e vi associo i relativi utenti, le relative categorie e i decision maker sfruttando le relazioni che ho definito nei models 

        return view('home', ['petitions' => $petitions]);
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
    public function createStepOne(Request $request)
    {
        $petition = $request->session()->get('petition');
        return view('petitioncreate1', ['petition' => $petition]);
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'area_interesse' => 'required|in:locale,nazionale,globale',
        ]);

        if(empty($request->session()->get('petition'))) {
            $petition = new Petition();
            $petition->fill($validatedData);
            $request->session()->put('petition', $petition);
        } else {
            $petition = $request->session()->get('petition');
            $petition->fill($validatedData);
            $request->session()->put('petition', $petition);
        }

        $petition = $request->session()->get('petition');

        if($petition->area_interesse === 'locale') {
            return redirect()->route('petitions.create.step.one.bis');
        } else {
            return redirect()->route('petitions.create.step.two');
        }
    }

    public function createStepOneBis(Request $request)
    {
        $petition = $request->session()->get('petition');
        
        return view('petitioncreate1bis', ['petition' => $petition]);
    }

    public function postCreateStepOneBis(Request $request)
    {
        /* $validatedData = $request->validate([
            'category_id' => 'required',
        ]);
  
        $petition = $request->session()->get('petition');
        $petition->fill($validatedData);
        $request->session()->put('petition', $petition);
  
        return redirect()->route('petitions.create.step.three'); */

    }

    public function createStepTwo(Request $request)
    {
        $petition = $request->session()->get('petition');
        $categories = Category::all();
        return view('petitioncreate2', ['categories' => $categories, 'petition' => $petition]);
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
        ]);
  
        $petition = $request->session()->get('petition');
        $petition->fill($validatedData);
        $request->session()->put('petition', $petition);
  
        return redirect()->route('petitions.create.step.three');

    }

    public function createStepThree(Request $request)
    {
        
    }

    public function postCreateStepThree(Request $request)
    {
        

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
    public function show($id)
    {
        $petition = Petition::with('comments.user')->withCount('signatures')->find($id);
        $comments = $petition->comments()->paginate(5);

        return view('petitiondetail', ['petition' => $petition, 'comments' => $comments]);
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
