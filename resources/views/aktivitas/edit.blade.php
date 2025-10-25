<body>
    @include('layouts/Header')
        <div class="edit">
            <h2>Update Aktivitas</h2>
            <form action="{{ route('aktivitas.update', $aktivitas->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="nama">
                    <label for="nama_aktivitas">Nama aktivitas</label>
                    <input type="text" class="edit-input" id="nama_aktivitas" name="nama_aktivitas" value="{{$aktivitas->nama_aktivitas}}" required>
                </div>
                <div class="deskripsi">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="edit-input" id="deskripsi" rows="3" required>{{$aktivitas->deskripsi}}</textarea>
                </div>
                <div class="tanggal">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="edit-input" id="tanggal" name="tanggal" value="{{$aktivitas->tanggal}}" required>
                </div>
                <div class="status">
                    <input type="checkbox" id="status" name="status" value="1" {{$aktivitas->status ? 'checked' : ''}}>
                    <label for="status">selesai</label>
                </div>
                <button type="submit" class="largerCheckbox">Update</button>
            </form>
        </div>
    @include('layouts/Footer')
</body>