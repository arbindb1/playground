<?php
//blade component class
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FacultyTable extends Component
{
    public $id;
    public $class;
    public $facultyData;

    /**
     * Create a new component instance.
     */
    public function __construct($id,$class,$facultyData)
    {
        $this->id = $id;
        $this->class = $class;
        $this->facultyData = $facultyData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.faculty-table');
    }
}
