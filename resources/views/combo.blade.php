@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <div class="row">
        <div class="col">
                <label for="position-option">Pilih Kategori</label>
                <select class="form-control" id="Nama" name="ID">
                    @foreach ($kategori as $k)
                        <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
                    @endforeach
                </select>
                <br>
                <a href="/hasilcombo" class="btn btn-primary">Kirim</a>
        </div>
        <div class="col">
        </div>
    </div>
@endsection
