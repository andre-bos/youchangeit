<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PetitionCard extends Component
{
    public string $decMaker;
    public string $titolo;
    public string $descrizione;
    public string $userId;
    public $imgUrl;
    public function __construct(string $decMaker = '', string $titolo = '', string $descrizione = '', string $userId = '', $imgUrl = '')
    {
        $this->decMaker = $decMaker;
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->userId = $userId;
        $this->imgUrl = $imgUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.petition-card');
    }
}
