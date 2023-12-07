<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{

    public function index()
	{
    	// mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data nilaikuliah ke view index
		return view('latihan15',['nilaikuliah' => $nilaikuliah]);

	}

    public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->NRP,
			'nilaiangka' => $request->NilaiAngka,
			'sks' => $request->SKS

		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/latihan15');

	}

    public function tambah()
	{
		// memanggil view tambah
		return view('tambahlatihan');
	}
}
