<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $route;
    public $facultylist;
    public $value;
    public function __construct($id, $route, $facultylist, $value)
    {
        $this->id = $id;
        $this->route = $route;
        $this->facultylist = $facultylist;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-form');
    }
}
