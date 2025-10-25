<link rel="stylesheet" href="{{asset('css/style.css')}}">
<header>
    <h1 style="text-align: center; font-size: 40px">My Personal Website</h1>
</header>
<nav>
    <ul>
        <li class="{{request()->routeIs('beranda')? 'active' : ''}}"">
            <a href="{{route('beranda')}}">beranda</a>
        </li>
        <li class="{{request()->routeIs('datadiri')? 'active' : ''}}"">
            <a href="{{route('datadiri')}}">datadiri</a>
        </li>
        <li class="{{request()->routeIs('aktivitas')? 'active' : ''}}"">
            <a href="{{route('aktivitas')}}">aktivitas</a>
        </li>
        <li class="{{request()->routeIs('kontak')? 'active' : ''}}"">
            <a href="{{route('kontak')}}">kontak</a>
        </li>
    </ul>
</nav>

