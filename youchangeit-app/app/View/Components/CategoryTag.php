<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class CategoryTag extends Component
{
    public ?int $formData;
    public Category $category;
    public function __construct(?int $formData, Category $category)
    {
        $this->category = $category;
        $this->formData = $formData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('ccomps.category-tag');
    }
}
