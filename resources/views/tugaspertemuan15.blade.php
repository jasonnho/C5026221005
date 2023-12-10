@extends('master2')
@section('judulhalaman', 'Data Meja')

@section('konten')

    <h2>Tugas Pertemuan 15</h2>
    <h3>Data Meja</h3>

    <br />
    <a href="/tugaspertemuan15/tambah" class="btn btn-primary"> + Tambah Meja Baru</a>

    <br />
    <br />
    <div class="row">
        <div class="col">
            <p>Cari Data Meja :</p>
        </div>
        <div class="col">
            <form action="/tugaspertemuan15/cari" method="GET" class="float-right">
                <div class="row">
                    <div class="col-auto">
                        <input class="form form-control" type="text" name="cari" placeholder="Cari Meja .."
                            value="{{ old('cari', isset($cari) ? $cari : '') }}">
                    </div>
                    <div class="col-auto">
                        <input type="submit" value="CARI" class="btn btn-info">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br />

    <table class="table table-stripped table-hover">
        <tr>
            <th>Kode Meja</th>
            <th>Merk Meja</th>
            <th>Stock Meja</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($meja as $p)
            <tr>
                <td>{{ $p->kodemeja }}</td>
                <td>{{ $p->merkmeja }}</td>
                <td>{{ $p->stockmeja }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/tugaspertemuan15/edit/{{ $p->kodemeja }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/tugaspertemuan15/hapus/{{ $p->kodemeja }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $meja->links() }}

@endsection
