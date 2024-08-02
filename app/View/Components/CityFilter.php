<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CityFilter extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $filterData;
    public $listAll;
    public function __construct($id,$filterData,$listAll)
    {
        $this->id = $id;
        $this->filterData = $filterData;
        $this->listAll = $listAll;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.city-filter');
    }
}
