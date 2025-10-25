<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div>
    @include('layouts/header')

    <div class="container">
        <h2>Daftar Aktivitas</h2>
        <a href="{{ route('aktivitas.create') }}" class="btn-add">+ Tambahkan Aktivitas</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Aktivitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->nama_aktivitas }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                    <td>{{ $item->status ? 'Selesai' : 'Belum Selesai' }}</td>
                    <td>
                        <div class="aksi">
                            <a href="{{ route('aktivitas.show', $item->id) }}" class="btn btn-primary">Lihat</a>
                            <a href="{{ route('aktivitas.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('aktivitas.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('layouts/footer')
</div>
