<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FacultyDataTable extends Component
{
    public $faculties;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $faculties
    ) {
        $this->faculties = $faculties;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faculty-data-table');
    }
}
