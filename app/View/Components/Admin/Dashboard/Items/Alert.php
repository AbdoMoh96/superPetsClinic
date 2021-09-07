<?php

namespace App\View\Components\Admin\Dashboard\Items;

use Illuminate\View\Component;

class Alert extends Component
{

    public $state;
    public $title;
    public $message;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($state , $message , $title = 'Alert!')
    {
        $this->state = $state;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.dashboard.items.alert');
    }
}
