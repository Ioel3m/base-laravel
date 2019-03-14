@if ($item['submenu'] == [])
<li class="nav-item">
    <a href="{{ url($item['nombre']) }}">{{ $item['nombre'] }} </a>
</li>
@else
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item['nombre'] }} <span class="caret"></span></a>
    <div class="dropdown-menu sub-menu">
        @foreach ($item['submenu'] as $submenu) @if ($submenu['submenu'] == [])
        <a class="dropdown-item" href="{{ url('menu',['id' => $submenu['id'], 'slug' => $submenu['slug']]) }}">{{ $submenu['nombre'] }} </a>
        @else
    @include('partials.menu-item', [ 'item' => $submenu ]) @endif @endforeach
    </div>
</li>
@endif

