<ul class="account-nav">
    <li><a href="{{route('user.index')}}" class="menu-link menu-link_us-s">Dashboard</a></li>
    {{-- <li><a href="" class="menu-link menu-link_us-s">Orders</a></li> --}}
    @if(Auth::check() && Auth::user()->Utype == 'ADM')
    <li><a href="{{route('admin.index')}}" class="menu-link menu-link_us-s">Admin Panel</a></li>
@endif

    <li>
        <form method="POST" action="{{route('logout')}}" id="logout-form">
            @csrf
            <a href="{{route('logout')}}" class="menu-link menu-link_us-s" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        </form>
    </li>
  </ul>