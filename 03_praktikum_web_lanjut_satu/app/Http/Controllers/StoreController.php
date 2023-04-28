<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function rinso(){
        return view('product', ['productName' => 'Rinso']);
    }
    function lifebuoy(){
        return view('product', ['productName' => 'Lifebuoy']);
        
    }
    function sunlight(){
        return view('product', ['productName' => 'Sunlight']);
        
    }

    function promo($promo){
        return view('news', ['promo' => $promo]);
    }

    function gajiKaryawan(){
        return view('program', ['message' => 'Ini saatnya memberi gaji karyawan!']);
    }
    function restok(){
        return view('program', ['message' => 'Ini saatnya memberi restok barang!']);
    }
    function bayarKontrak(){
        return view('program', ['message' => 'Ini saatnya membayar tagihan kontrak toko!']);
    }
}
