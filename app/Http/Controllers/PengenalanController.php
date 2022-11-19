<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    public function index(){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $operasi = $_GET['operasi'];

        echo "Nilai y = $a<br>";
        echo "Nilai x = $b<br><br>";

        if ($operasi=="jumlah"){
            $c = $a + $b; // rumus penjumlahan
            echo "penjumlahan $a + $b = $c";
        }
        elseif ($operasi=="kurang"){
            $c = $a - $b; // rumus pengurangan
            echo "pengurangan $a - $b = $c";
        }
        elseif ($operasi=="kali"){
            $c = $a * $b; // rumus perkalian
            echo "perkalian $a x $b = $c";
        }
        elseif ($operasi=="bagi"){
            $c = $a / $b; // rumus pembagian
            echo "pembagian $a / $b = $c";
        }
       return view('latihan');
    }

}