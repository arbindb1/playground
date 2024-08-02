<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class nav extends Component
{
    /**
     * Create a new component instance.
     */
    public $homeroute;
    public $sdroute;
    public $stroute;


    public function __construct($homeroute,$sdroute,$stroute)
    {
        $this->homeroute = $homeroute;
        $this->sdroute = $sdroute;
        $this->stroute = $stroute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav');
    }
}
