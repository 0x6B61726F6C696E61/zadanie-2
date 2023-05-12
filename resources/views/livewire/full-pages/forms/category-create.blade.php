<div>
    <h1>DODAJ KATEGORIĘ</h1>
    <form wire:submit.lazy.prevent="submit">
        Nazwa:
        <input type='text' wire:model='name'>
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <br>
        Opis:
        <input type='text' wire:model='desc'>
        @error('desc') <span class="error">{{ $message }}</span> @enderror
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
        <button type='submit'>Add</button>
    
    </form>
    </div>