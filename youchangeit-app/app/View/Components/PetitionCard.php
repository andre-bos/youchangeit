<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PetitionCard extends Component
{
    public string $decMakerNome;
    public string $decMakerCognome;
    public string $titolo;
    public string $descrizione;
    public string $userNome;
    public string $userCognome;
    public string $imgUrl;
    public string $categoria;
    public function __construct(string $decMakerNome = '', string $decMakerCognome = '', string $titolo = '', string $descrizione = '', string $userNome = '', $userCognome = '', $imgUrl = '', $categoria = '')
    {
        $this->decMakerNome = $decMakerNome;
        $this->decMakerCognome = $decMakerCognome;
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->userNome = $userNome;
        $this->userCognome = $userCognome;
        $this->imgUrl = $imgUrl;
        $this->categoria = $categoria;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.petition-card');
    }
}
