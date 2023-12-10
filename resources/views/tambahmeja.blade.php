@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">Tugas Pertemuan 15</a></h2>
    <h3>Data Meja</h3>

    <br/>
    <a href="/tugaspertemuan15" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/tugaspertemuan15/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkmeja" class="col-sm-2 col-form-label">Merk Meja</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="merkmeja" name="merkmeja">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmeja" class="col-sm-2 col-form-label">Stock Meja</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="stockmeja" name="stockmeja">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
