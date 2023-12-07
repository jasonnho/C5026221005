@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">Latihan Pertemuan 15</a></h2>
    <h3>Nilai Kuliah</h3>

    <a href="/latihan15" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/latihan15/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="NRP" name="NRP"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="NilaiAngka" name="NilaiAngka"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="SKS" name="SKS"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
