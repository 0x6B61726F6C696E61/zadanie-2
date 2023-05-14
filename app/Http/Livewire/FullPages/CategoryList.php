<?php

namespace App\Http\Livewire\FullPages;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    public $input_value;
    protected $paginationTheme='bootstrap';


    public function search(){
        $this->resetPage();
    }
    

    public function render()
    {
        return view('livewire.full-pages.category-list', ['all_categories' => Category::where('name','like', $this->input_value.'%')->paginate(10),]);
    }
}
