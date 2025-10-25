<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard admin</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="dashboard-admin">
        <div class="navbar-admin">
            <nav class="dashboard-menu-admin">
                <a href="{{route('admin.dashboard')}}">Admin Panel</a>
                <ul class="list-menu-admin">
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <ul>
                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a></li>
                        <form action="{{route('admin.logout')}}" method="post" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                </ul>
            </nav>
        </div>
        <div class="content-dashboard">
            <h1>Selamat Datang di Dashboard Admin</h1>
            <p>Ini adalah dashboard admin</p>
        </div>
    </div>
</body>
</html>