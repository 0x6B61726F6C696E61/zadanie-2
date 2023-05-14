<div class='text-white'>
    <h1>Edytuj kategorię</h1>
    <br>
    {{$category->name}}
    {{$category->description}}
    {{$category->is_active}}
    <br>
    <br>
    <form wire:submit.prevent="edit">
        Nowa nazwa:
        <input type='text' wire:model='name' class="rounded w-25 mb-3 form-group form-group-lg">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <br>
        Nowy opis:
        <input type='text' wire:model='desc' class="rounded w-25 ms-3 form-group form-group-lg">
        @error('desc') <span class="error">{{ $message }}</span> @enderror
        <br>
        <br>
        Nowy status:
        <label>
        <input type='radio' wire:model='activity' value=1>
        Aktywny
        </label>

        <label>
            <input type='radio' wire:model='activity' value=0>
            Nieaktywny
        </label>

        <br>
        <br>
        <button type='submit' class="btn btn-secondary">Edytuj</button>
</div>
