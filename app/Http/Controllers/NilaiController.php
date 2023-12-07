<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{

    public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('latihan15',['nilaikuliah' => $nilaikuliah]);

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->NRP,
			'nilaiangka' => $request->NilaiAngka,
			'sks' => $request->SKS

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/latihan15');

	}

    public function tambah()
	{
		// memanggil view tambah
		return view('tambahlatihan');
	}
}
