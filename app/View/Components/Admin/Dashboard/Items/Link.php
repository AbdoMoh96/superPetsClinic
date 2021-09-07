<?php

namespace App\View\Components\Admin\Dashboard\Items;

use Illuminate\View\Component;

class Link extends Component
{

    public $name;
    public $route;
    public $icon;
    public $slug;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name , $route , $icon , $slug = null)
    {
        $this->name = $name;
        $this->route = $route;
        $this->icon = $icon;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.dashboard.items.link');
    }
}
