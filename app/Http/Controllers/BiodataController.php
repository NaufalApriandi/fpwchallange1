<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
   public function index(){
    $nama = "Muhammad Naufal Apriandi";
    $bio = "Saya Mahasiswa Unsika Informatika";
    $hobby = ["Basket","Main Dota 2","Nonton Film Horor"];
    return view('biodata',['nama'=>$nama,'bio'=>$bio,'hobby'=>$hobby]);
   }
}
