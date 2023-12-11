@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <div class="row">
        <div class="col">
            <form action="/hasilcombo" method="get" class="form-horizontal">
                <label for="position-option">Pilih Kategori</label>
                <select class="form-control" name="cari">
                    @foreach ($kategori as $k)
                    <option value = "{{$k->Nama}}">{{$k->Nama}}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" value="Kirim" class="btn btn-primary">
            </form>
        </div>
        <div class="col">
        </div>
    </div>
@endsection
