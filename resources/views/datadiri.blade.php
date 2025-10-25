<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="main">
    @include('layouts/header')
        <div class="datadiri">
            <h1>Selamat datang di Halaman Data Diri</h1>
            <img src="https://img.freepik.com/free-vector/blue-circle-with-white-user_78370-4707.jpg?semt=ais_hybrid&w=740&q=80" alt="foto profil saya">
            <h3>Hello, ini sedikit perkenalan tentang saya</h3>
            <p>Perkenalkan nama saya {{$nama}}</p>
            <p>Saya mahasiswa {{$prodi}}</p>
        </div>
    @include('layouts/footer')
</div>
