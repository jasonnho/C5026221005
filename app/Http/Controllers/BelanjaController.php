<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{

    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('latihan15p',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'kodebarang' => $request->KodeBarang,
			'jumlah' => $request->Jumlah,
			'harga' => $request->Harga

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/latihan15p');

	}

    public function tambah()
	{
		// memanggil view tambah
		return view('tambahlatihanp');
	}

    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/latihan15p');
	}
}
