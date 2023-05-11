<div>
    <h3>Edytuj przedmiot</h3>
    <br>
    {{$item->name}}
    {{$item->description}}
    {{$item->price}}
    <br>
    <form wire:submit.prevent="edit">
        New name:
        <input type='text' name='item_name' wire:model='name'>
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <br>
        New description:
        <input type='text' name='item_desc' wire:model='desc'>
        @error('desc') <span class="error">{{ $message }}</span> @enderror
        <br>
        New price:
        <input type='numeric' name='item_name' wire:model='price'>
        @error('price') <span class="error">{{ $message }}</span> @enderror
        <br>
        <button type='submit'>Edit</button>
</div>
