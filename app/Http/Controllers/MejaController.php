<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MejaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table meja
        $meja = DB::table('meja')->paginate(15);

    	// mengirim data meja ke view index
		return view('tugaspertemuan15',['meja' => $meja]);

	}

	// method untuk menampilkan view form tambah meja
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahmeja');

	}

	// method untuk insert data ke table meja
	public function store(Request $request)
	{
		// insert data ke table meja
		DB::table('meja')->insert([
			'merkmeja' => $request->merkmeja,
			'stockmeja' => $request->stockmeja,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman meja
		return redirect('/tugaspertemuan15');

	}

	// method untuk edit data meja
	public function edit($id)
	{
		// mengambil data meja berdasarkan id yang dipilih
		$meja = DB::table('meja')->where('kodemeja',$id)->get();
		// passing data meja yang didapat ke view edit.blade.php
		return view('editmeja',['meja' => $meja]);

	}

	// update data meja
	public function update(Request $request)
	{
		// update data meja
		DB::table('meja')->where('kodemeja',$request->id)->update([
			'merkmeja' => $request->merkmeja,
			'stockmeja' => $request->stockmeja,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman meja
		return redirect('/tugaspertemuan15');
	}

	// method untuk hapus data meja
	public function hapus($kodemeja)
	{
		// menghapus data meja berdasarkan id yang dipilih
		DB::table('meja')->where('kodemeja',$kodemeja)->delete();

		// alihkan halaman ke halaman meja
		return redirect('/tugaspertemuan15');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table meja sesuai pencarian data
		$pegawai = DB::table('meja')
		->where('merkmeja','like',"%".$cari."%")
		->paginate();

    		// mengirim data meja ke view index
		return view('tugaspertemuan15',['meja' => $meja, 'cari' => $cari]);

	}

}
