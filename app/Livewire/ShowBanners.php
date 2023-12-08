<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class ShowBanners extends Component
{

    public $banners = [];

    public function render()
    {
        $this->banners = File::glob(public_path('storage/banners').'/*');
        return view('livewire.show-banners');
    }
}
