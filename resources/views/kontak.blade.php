<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div>
    @include('layouts/header')
        <div class="style-kontak mt-5 mb-5">
            <h2>Beri Masukkan</h2>
            <form action="{{route('kontak.kirim')}}" method="POST">
                @csrf
                <div class="main-form">
                    <label for="nama" class="form-label" >Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="main-form">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="main-form">
                    <label for="no_hp" class="form-label" >No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="main-form">
                    <label for="pesan" class="form-label" >Pesan</label>
                    <textarea class="form-control-p" name="pesan" id="pesan" cols="30" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn">Kirim</button>
            </form>
        </div>
    @include('layouts/footer')
</div>

