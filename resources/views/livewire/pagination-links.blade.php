<div class='text-white bg-dark'>
    @if ($paginator->hasPages())
        <ul class='list-group list-group-horizontal'>
            @if ($paginator->onFirstPage())
                <li class="list-group-item disabled bg-dark text-white border border-secondary">Poprzednia</li>
            @else
                <li class="list-group-item bg-dark text-white border border-secondary" wire:click='previousPage'>Poprzednia</li>
            @endif




            @foreach ($elements as $element)
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="list-group-item bg-secondary text-white border border-secondary" wire:click="gotoPage({{$page}})">{{$page}}</li>
                @else
                <li class="list-group-item bg-dark text-white border border-secondary" wire:click="gotoPage({{$page}})">{{$page}}</li>
                @endif
                @endforeach
                @endif
            
            @endforeach






            @if ($paginator->hasMorePages())
                <li class="list-group-item bg-dark text-white border border-secondary" wire:click='nextPage'>Następna</li>
            @else
                <li class="list-group-item disabled bg-dark text-white border border-secondary">Następna</li>
            @endif

        </ul>
        @endif
</div>

