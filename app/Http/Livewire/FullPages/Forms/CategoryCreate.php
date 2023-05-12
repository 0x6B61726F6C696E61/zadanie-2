<?php

namespace App\Http\Livewire\FullPages\Forms;

use Livewire\Component;
use App\Models\Category;

class CategoryCreate extends Component
{

    public $name;
    public $desc;
    public $activity;

    protected $rules = [
        'name' => 'required',
        'desc' => 'required'
    ];
    

    public function submit(){

            $this->validate();

            $new_category = Category::create([
                'name' => $this->name,
                'description' => $this->desc,
                'is_active' => $this->activity
            ]);

        return redirect()->to('/kategorie');
    }


    public function render()
    {
        return view('livewire.full-pages.forms.category-create');
    }
}
