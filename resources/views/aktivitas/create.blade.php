<body>
    @include('layouts/header')
    <div class="create">
        <h2>Tambah Aktivitas</h2>
        <form action="{{route('aktivitas.store')}}" method="post">
            @csrf
            <div class="nama">
                <label for="nama_aktivitas">Nama aktivitas</label>
                <input type="text"class="create-input" id="nama_aktivitas" name="nama_aktivitas" required>
            </div>
            <div class="deskripsi">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="create-input" id="deskripsi" cols="30" rows="10" required></textarea>
            </div>
            <div class="tanggal">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="create-input" id="tanggal" name="tanggal" required>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>
    @include('layouts/footer')
</body>