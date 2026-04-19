<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Data diri
        $data = [
            'nama' => 'Muhammad Dzulfikri', // Ganti dengan nama Anda
            'nim' => '20230140159',   // Ganti dengan NIM Anda
            'prodi' => 'Teknologi Informasi', // Ganti dengan program studi Anda
            'hobi' => ['Membaca', 'Coding', 'Olahraga', 'Musik']
        ];
        
        return view('about', $data);
    }
}