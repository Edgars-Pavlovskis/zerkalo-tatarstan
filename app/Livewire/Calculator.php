<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Catalog;

class Calculator extends Component
{
    public $id;
    public $height=0;
    public $width=0;
    public $area=0;
    public $length=0;
    public $processing=false;


    public function updatedHeight()
    {
        if(!is_numeric($this->height) && !empty($this->height)) $this->height = 0;
    }
    public function updatedWidth()
    {
        if(!is_numeric($this->width) && !empty($this->width)) $this->width = 0;
    }

    public function updatedProcessing()
    {

    }

    public function render()
    {
        if(is_numeric($this->height) && is_numeric($this->width)) {
            $this->area = round($this->height * $this->width/1000000, 2);
            $this->length = round((($this->height + $this->width)*2)/1000, 2);
        } else {
            $this->area = 0;
            $this->length = 0;
        }

        return view('livewire.calculator', [
            'catalog' => Catalog::find($this->id)
        ]);
    }
}
