@if ($item['submenu'] == [])
    <li class="nav-item">
        <a href="{{ route($item['slug']) }}">{{ $item['nombre'] }} </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">{{ $item['nombre'] }} <span class="caret"></span></a>
        <div class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu) @if ($submenu['submenu'] == [])
                <a class="dropdown-item" href="{{ route($submenu['slug']) }}">{{ $submenu['nombre'] }} </a>
            @else
                @include('partials.menu-item', [ 'item' => $submenu ]) @endif
            @endforeach
        </div>
    </li>

    <li class="nav-item">

        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
           class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">
            {{ __('Cerrar sesión') }}
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            @csrf
        </form>

    </li>
@endif

