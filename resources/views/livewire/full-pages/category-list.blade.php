<div>
    <div>
    <form wire:submit.prevent>
    <input class="rounded w-50 m-3 form-group form-group-lg" type='text' wire:model.lazy='input_value' placeholder="Wyszukaj po nazwie..." >
    <button type='submit' class='btn btn-secondary'>Szukaj</button>
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
