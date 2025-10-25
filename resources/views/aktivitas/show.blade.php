<body>
    @include('layouts/header')
    <div class="container-show">
        <h2>Detail Aktivitas</h2>
        <div class="card">
            <div class="card-body">
                <h5> <strong>Nama Aktivitas :</strong> {{$aktivitas->nama_aktivitas}}</h5>
                <p> <strong>Deskripsi :</strong> {{$aktivitas->deskripsi}}</p>
                <p> <strong>Tanggal :</strong> {{$aktivitas->tanggal}}</p>
                <p> <strong>Status :</strong> {{$aktivitas->status ? 'selesai' : 'belum selesai'}}</p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>