@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<h3>Anda telah memilih kategori</h3>
@foreach($kategori as $k)
<h3>dengan kode : {{$k->ID}}</h3>
<br>
<br>
@endforeach
<a href="/combo" class="btn btn-primary"> Kembali</a>






@endsection
