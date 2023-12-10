@extends('master2')
@section('judulhalaman', 'Data Meja')

@section('konten')

	<h2><a href="https://www.malasngoding.com">Tugas Pertemuan 15</a></h2>
	<h3>Edit Meja</h3>

	<a href="/tugaspertemuan15" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($meja as $p)
    <form action="/tugaspertemuan15/update" method="post" class="form-horizontal">
        {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $p->kodemeja }}">
        <div class="form-group row">
            <label for="merkmeja" class="col-sm-2 col-form-label">Merk Meja</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form form-control" name="merkmeja" value="{{ $p->merkmeja }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmeja" class="col-sm-2 col-form-label">Stock Meja</label>
            <div class="col-sm-10">
                <input type="text" required="required" class="form form-control" name="stockmeja" value="{{ $p->stockmeja }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="text" class="form form-control" required="required" name="tersedia" value="{{ $p->tersedia }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
	@endforeach

@endsection
