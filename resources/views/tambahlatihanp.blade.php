@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">Latihan Pertemuan 15</a></h2>
    <h3>Keranjang Belanja</h3>

    <a href="/latihan15p" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/latihan15p/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">KodeBarang</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="KodeBarang" name="KodeBarang"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="Jumlah" name="Jumlah"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="Harga" name="Harga"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
