<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $studentlist;
    public function __construct($id, $studentlist)
    {
        $this->id = $id;
        $this->studentlist = $studentlist;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-table');
    }
}
