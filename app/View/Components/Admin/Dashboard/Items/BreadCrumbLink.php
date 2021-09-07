<?php

namespace App\View\Components\Admin\Dashboard\Items;

use Illuminate\View\Component;

class BreadCrumbLink extends Component
{

    public $name;
    public $active;
    public $route;


    public function __construct($name , $active , $route = "")
    {
        $this->name = $name;
        $this->active = $active;
        $this->route = $route;
    }


    public function render()
    {
        return view('components.admin.dashboard.items.bread-crumb-link');
    }
}
