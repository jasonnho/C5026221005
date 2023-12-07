@extends('master2')
@section('judulhalaman', 'Nilai Kuliah')

@section('konten')

	<h2>Latihan Pertemuan 15 Perempuan</h2>
	<h3>Nilai Kuliah</h3>

    <br/>
	<a href="/latihanuas2/tambah" class="btn btn-primary"> + Beli Barang Baru</a>

	<br/>
	<br/>

	<br/>

	<table class="table table-stripped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah}}</td>
			<td>{{ $k->Harga}}</td>
            <td>
                {{$k->Harga * $k->Jumlah}}
            </td>
            <td>
                <a href="/latihan15p/hapus/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
            </td>
		</tr>
		@endforeach
	</table>


@endsection
