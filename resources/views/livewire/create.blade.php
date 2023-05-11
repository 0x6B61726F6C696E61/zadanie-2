<div>
<h1>ADD ITEM</h1>
<form wire:submit.prevent="submit">
    Name:
    <input type='text' name='item_name' wire:model='name'>
    @error('name') <span class="error">{{ $message }}</span> @enderror
    <br>
    Description:
    <input type='text' name='item_desc' wire:model='desc'>
    @error('desc') <span class="error">{{ $message }}</span> @enderror
    <br>
    Price:
    <input type='numeric' name='item_name' wire:model='price'>
    @error('price') <span class="error">{{ $message }}</span> @enderror
    <br>
    <button type='submit'>Add</button>

</form>
</div>
