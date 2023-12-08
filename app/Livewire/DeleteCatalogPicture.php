<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Catalog;

class DeleteCatalogPicture extends Component
{
    public $catalog_id;
    public $catalog_data = [];

    public function mount()
    {
        $this->catalog_data = Catalog::find($this->catalog_id);
    }

    public function delete()
    {

        if (Storage::exists('public/catalog/'.$this->catalog_data->image)) {
            unlink(storage_path('app/public/catalog/'.$this->catalog_data->image));
        }
        $this->catalog_data->image = '';
        $this->catalog_data->save();

    }


    public function render()
    {
        return view('livewire.delete-catalog-picture');
    }
}
