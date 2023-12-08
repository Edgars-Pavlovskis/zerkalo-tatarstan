<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class AdminCatalogGallery extends Component
{
    public $id;
    public $galleryImages = [];


    public function removeGallery($path='')
    {
        if(file_exists($path)){
            unlink($path);
            $this->render();
        }
    }

    public function render()
    {
        $this->galleryImages = File::glob(public_path('storage/catalog/'.$this->id).'/*');
        return view('livewire.admin-catalog-gallery');
    }
}
