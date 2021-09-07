<?php

namespace App\View\Components\Admin\Dashboard\Items;

use Illuminate\View\Component;

class Menu extends Component
{

    public $name;
    public $route;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name , $route , $icon)
    {
        $this->name = $name;
        $this->route = $route;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.dashboard.items.menu');
    }
}
