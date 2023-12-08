<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Catalog;

class ShowCatalog extends Component
{
    public $catalog = [];
    public function render()
    {
        $this->catalog = Catalog::all();
        return view('livewire.show-catalog');
    }
}
