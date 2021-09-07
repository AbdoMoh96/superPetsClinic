<?php

namespace App\View\Components\Admin\Dashboard;

use Illuminate\View\Component;

class Layout extends Component
{
    public $starter;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($starter)
    {
        $this->starter = $starter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.dashboard.layout');
    }
}
