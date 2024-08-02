<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FacultyForm extends Component
{
    public $route;
    public $value;
    public $id;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($route,$value,$class,$id)
    {
        $this->route = $route;
        $this->value = $value;
        $this->id = $id;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faculty-form');
    }
}
