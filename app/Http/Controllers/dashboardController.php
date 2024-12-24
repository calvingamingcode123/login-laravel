<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function admin(){
     $produk =  [
          ["nama" => 'mangga', "harga" => 120000, "type" => "buah"],
          ["nama"=> 'jeruk', "harga" => 130000,"type" => "buah"],
          ["nama"=> 'kol', "harga" => 140000, "type" => "sayur"],
          ["nama"=> 'nanas', "harga" => 150000, "type" => "buah"],
          ["nama"=> 'semangka', "harga" => 160000, "type" => "buah"],
     ];

        return view('dashboard', compact('produk') );
    }
    public function kategori(){
        $kategori = [
            ["nama" => 'mangga', "type" => 'buah'],
            ["nama"=> 'jeruk', "type" => 'buah'],
            ["nama"=> 'kol', "type" => 'sayur'],
            ["nama"=> 'nanas', "type" => 'buah'],
            ["nama"=> 'semangka', "type" => 'buah'],
       ];
    }
}
