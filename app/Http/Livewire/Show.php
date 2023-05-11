<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class Show extends Component
{
    public $item;
 
    public function mount($id)
    {
        $this->item = Item::find($id);
    }

    public function render()
    {
        return view('livewire.show');
    }
}
