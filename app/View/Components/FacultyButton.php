<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FacultyButton extends Component
{
    public $id;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $route)
    {
        $this->id = $id;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faculty-button');
    }
}
