<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSignatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Verifica se l'utente è autenticato
        if (!auth()->check()) {
            return false;
        }

        // Verifica se lo stato dell'utente è 'sospeso'
        if (auth()->user()->status === 'sospeso') {
            return false;
        }

        // Verifica se l'utente ha già firmato la petizione
        $hasSigned = \App\Models\Signature::where('user_id', auth()->id())
        ->where('petition_id', $this->petition_id)
        ->exists();

        return !$hasSigned;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $rules = [
            'user_id' => 'required|integer|exists:users,id',
            'petition_id' => 'required|integer|exists:petitions,id',
            'commento' => 'nullable|string',
        ];
    
        if ($this->filled('commento')) {
            $rules['commento'] = 'between:10,2000';
        }
    
        return $rules;
    }
}
