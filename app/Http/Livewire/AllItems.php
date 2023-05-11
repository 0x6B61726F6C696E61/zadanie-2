<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class AllItems extends Component
{

    public $all_items;
    public $a = 5;
    public function render()
    {
        $this->all_items = Item::all();
        return view('livewire.all-items');
    }
}
