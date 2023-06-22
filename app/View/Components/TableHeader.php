<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $direction,
        public string $name,
        public string $currentName,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.table-header', [
            'visible' => $this->currentName == $this->name
        ]);
    }
}
