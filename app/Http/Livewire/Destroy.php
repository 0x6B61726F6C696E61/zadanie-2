<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class Destroy extends Component
{
    public $item;
    public function mount($id)
    {
        $this->item = Item::find($id);
    }

    public function render()
    {
        return view('livewire.destroy');
    }

    public function no(){
        return redirect('/przedmioty');
    }

    public function yes(){
        $isDeleted = $this->item->delete();

        if ($isDeleted) {
            return redirect('/przedmioty');
        } else {
            throw new Exception('Ups. Coś poszło nie tak...');
        }
    }
}
