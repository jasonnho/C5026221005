<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 8;
        $b = 12;
        $c = $a * $b;
        return "<h1> hasil dari perkalian " . $c . "</h1>";
    }

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $alamat = "Surabaya";
        $umur = 100;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
