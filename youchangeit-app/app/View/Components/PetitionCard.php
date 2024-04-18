<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PetitionCard extends Component
{
    public string $decMakerNome;
    public string $decMakerCognome;
    public string $petitionId;
    public string $titolo;
    public string $descrizione;
    public string $userNome;
    public string $userCognome;
    public string $imgPetition;
    public string $imgAutore;
    public string $categoria;
    public string $contoFirme;
    public function __construct(string $decMakerNome = '', string $decMakerCognome = '', string $petitionId = '', string $titolo = '', string $descrizione = '', string $userNome = '', string $userCognome = '', string $imgPetition = '', string $imgAutore = '', string $categoria = '', string $contoFirme = '')
    {
        $this->decMakerNome = $decMakerNome;
        $this->decMakerCognome = $decMakerCognome;
        $this->petitionId = $petitionId;
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->userNome = $userNome;
        $this->userCognome = $userCognome;
        $this->imgPetition = $imgPetition;
        $this->imgAutore = $imgAutore;
        $this->categoria = $categoria;
        $this->contoFirme = $contoFirme;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.petition-card');
    }
}
