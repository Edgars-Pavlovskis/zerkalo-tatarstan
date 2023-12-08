<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class AdminPortfolio extends Component
{
    public $portfolioImages = [];

    public function removePortfolio($path='')
    {
        if(file_exists($path)){
            unlink($path);
            $this->render();
        }
    }

    public function render()
    {
        $this->portfolioImages = File::glob(public_path('storage/portfolio').'/*');
        return view('livewire.admin-portfolio');
    }
}
