<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ComboController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $kategori = DB::table('kategori')->get();

    	// mengirim data pegawai ke view index
		return view('combo',['kategori' => $kategori]);

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		$kategori = DB::table('kategori')
		    ->where('Nama','like',"%".$cari."%")
		    ->paginate();

		return view('hasilcombo',['kategori' => $kategori, 'cari' => $cari]);

	}

    // public function parse(Request $request)
    // {
    //     		// mengambil data pegawai berdasarkan id yang dipilih
	// 	$kategori = DB::table('kategori')->where('ID',$request->id)->get();
	// 	// passing data pegawai yang didapat ke view edit.blade.php
	// 	return redirect('hasilcombo/${kategori->id}');
    // }
}
