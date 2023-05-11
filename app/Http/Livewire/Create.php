<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Item;

class Create extends Component
{

    public $name;
    public $desc;
    public $price;

    protected $rules = [
        'name' => 'required',
        'desc' => 'required',
        'price' => 'required'
    ];
    

    public function submit(){

            $this->validate();

            $new_item = Item::create([
                'name' => $this->name,
                'price' => $this->price,
                'description' => $this->desc ?? null
            ]);

        return redirect()->to('/przedmioty');
    }

    public function render()
    {
        return view('livewire.create');
    }

}
