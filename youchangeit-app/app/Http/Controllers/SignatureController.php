<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSignatureRequest;
use App\Http\Requests\UpdateSignatureRequest;
use App\Models\Comment;
use App\Models\Signature;
use Carbon\Carbon;

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Sono il metodo show di signature';
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
    public function store(StoreSignatureRequest $request)
    {
        $data = $request->only(['user_id', 'petition_id']);
        $data['created_at'] = Carbon::now();

        $signature = Signature::create($data);

        if ($request->filled('commento')) {
            Comment::create([
                'user_id' => auth()->id(),
                'petition_id' => $request->petition_id,
                'signature_id' => $signature->id,
                'contenuto' => $request->commento,
                'approvato' => true,
                'created_at' => $signature->created_at
            ]);
        }

        // Aggiungo un messaggio flash alla sessione
        session()->flash('success', 'Grazie per aver firmato la petizione!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Signature $signature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Signature $signature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSignatureRequest $request, Signature $signature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Signature $signature)
    {
        //
    }
}
