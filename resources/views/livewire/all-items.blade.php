<div>

  @foreach ($all_items as $one_item)
      {{$one_item->name}}
      {{$one_item->description}}
      {{$one_item->price}}
      <br>
  @endforeach

</div>
