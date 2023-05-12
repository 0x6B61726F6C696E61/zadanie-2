<div>
    <h3>Edytuj kategorię</h3>
    <br>
    {{$category->name}}
    {{$category->description}}
    {{$category->is_active}}
    <br>
    <form wire:submit.prevent="edit">
        Nowa nazwa:
        <input type='text' wire:model='name'>
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <br>
        Nowy opis:
        <input type='text' wire:model='desc'>
        @error('desc') <span class="error">{{ $message }}</span> @enderror
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
        <button type='submit'>Edytuj</button>
</div>
