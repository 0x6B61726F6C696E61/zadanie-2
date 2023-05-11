<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class Update extends Component
{
    public $name;
    public $desc;
    public $price;

    public $item;
    public function mount($id)
    {
        $this->item = Item::find($id);
    }

    protected $rules = [
        'name' => 'required',
        'desc' => 'required',
        'price' => 'required'
    ];

    public function edit(){
        $this->validate();
        $this->item->name=$this->name;
        $this->item->description=$this->desc;
        $this->item->price=$this->price;
        $this->item->save();
        return redirect('/przedmioty');
    }

    public function render()
    {
        return view('livewire.update');
    }
}
