<div>
    <div>
    <form wire:submit.prevent='search'>
    <input class="rounded w-50 mt-3 form-group" type='text' wire:model.lazy='input_value' placeholder="Wyszukaj po nazwie..." >
    <button type='submit' class='btn btn-secondary ms-1'>Szukaj</button>
    </form>
    </div>
    
    <br>
    <br>

    <div>

    <table class="table table-striped table-bordered table-hover table-dark">

    @foreach ($all_categories as $category)
    <tr>
    <td>
    {{$category->name}}
    </td>
    </tr>
    @endforeach

    </table>
    </div>


    <br>

    <div>
    {{ $all_categories->links('livewire/pagination-links') }}
    </div>

</div>
