<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class AdminBanners extends Component
{

    public $banners = [];

    public function removeBanner($path='')
    {
        if(file_exists($path)){
            unlink($path);
            $this->render();
        }
    }


    public function render()
    {
        $this->banners = File::glob(public_path('storage/banners').'/*');
        return view('livewire.admin-banners');
    }
}
