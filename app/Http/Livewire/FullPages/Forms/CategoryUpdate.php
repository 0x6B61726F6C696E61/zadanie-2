<?php

namespace App\Http\Livewire\FullPages\Forms;

use Livewire\Component;
use App\Models\Category;

class CategoryUpdate extends Component
{
    public $name;
    public $desc;
    public $activity;

    public $category;
    public function mount($id)
    {
        $this->category = Category::find($id);
    }

    protected $rules = [
        'name' => 'required',
        'desc' => 'required'
    ];

    public function edit(){
        $this->validate();
        $this->category->name=$this->name;
        $this->category->description=$this->desc;
        $this->category->is_active=$this->activity;
        $this->category->save();
        return redirect('/kategorie');
    }


    public function render()
    {
        return view('livewire.full-pages.forms.category-update');
    }
}
