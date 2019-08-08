<ul>
    @forelse($luz as $item)
        <li>{{$item->mes}}</li>
    @empty
        <li>Sin items</li>
    @endforelse
</ul>
