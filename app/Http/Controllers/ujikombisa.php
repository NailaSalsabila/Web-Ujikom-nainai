<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ujikombisa extends Controller
{
    public function home(){
        $data = produk::all();
        return view('welcome',compact('data'));
    }

    public function login(){
        return view('login');
    }
    public function detail(Required $required, produk $produk)
    {
        return view('main', compact('produk'));
    }
    
}
