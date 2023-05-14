<div class='text-white'>
    <h1>DODAJ KATEGORIĘ</h1>

    <br>

    <form wire:submit.lazy.prevent="submit">
        
        Nazwa:
            <input type='text' wire:model='name' class="rounded w-25 mb-3 form-group form-group-lg">
            @error('name') <span class="error ms-3">{{ $message }}</span> @enderror
            <br>
        Opis:
            <input type='text' wire:model='desc' class="rounded w-25 m-3 form-group form-group-lg">
            @error('desc') <span class="error">{{ $message }}</span> @enderror
        
        <br>
        <br>

        Status aktywności:
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
        <button type='submit' class="btn btn-secondary">Dodaj</button>
    
    </form>
    </div>