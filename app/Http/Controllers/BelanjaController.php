<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{

    public function index()
	{
    	// mengambil data dari table keraenjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keraenjangbelanja ke view index
		return view('latihanuas2',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function store(Request $request)
	{
		// insert data ke table keraenjangbelanja
		DB::table('keranjangbelanja')->insert([
			'kodebarang' => $request->KodeBarang,
			'jumlah' => $request->Jumlah,
			'harga' => $request->Harga

		]);
		// alihkan halaman ke halaman keraenjangbelanja
		return redirect('/latihanuas2');

	}

    public function tambah()
	{
		// memanggil view tambah
		return view('tambahlatihanuas2');
	}

    public function hapus($id)
	{
		// menghapus data keraenjangbelanja berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman keraenjangbelanja
		return redirect('/latihanuas2');
	}
}
