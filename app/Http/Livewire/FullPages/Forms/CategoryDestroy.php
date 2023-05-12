<?php

namespace App\Http\Livewire\FullPages\Forms;
use App\Models\Category;

use Livewire\Component;

class CategoryDestroy extends Component
{
    public $category;
    public function mount($id)
    {
        $this->category = Category::find($id);
    }


    public function render()
    {
        return view('livewire.full-pages.forms.category-destroy');
    }

    public function no(){
        return redirect('/kategorie');
    }

    public function yes(){
        $isDeleted = $this->category->delete();

        if ($isDeleted) {
            return redirect('/kategorie');
        } else {
            throw new Exception('Ups. Coś poszło nie tak...');
        }
    }
}
