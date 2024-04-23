<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CommentCard extends Component
{
    public string $imgAutore;
    public string $userNome;
    public string $commento;
    public string $dataCreazione;
    
    public function __construct(string $imgAutore = '', string $userNome = '', string $commento = '', string $dataCreazione = '')
    {
        $this->imgAutore = $imgAutore;
        $this->userNome = $userNome;
        $this->commento = $commento;
        $this->dataCreazione = $dataCreazione;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.comment-card');
    }
}
