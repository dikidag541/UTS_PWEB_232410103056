<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', ['username' => $username]);
    }

    public function tentang()
    {
        $sejarah = [
            '1964' => 'Didirikan sebagai Blue Ribbon Sports',
            '1971' => 'Resmi berganti nama menjadi Nike',
            '1985' => 'Meluncurkan Air Jordan pertama',
            '1990' => 'Membuka kantor pusat dunia di Beaverton, Oregon'
        ];
        
        return view('tentang', ['sejarah' => $sejarah]);
    }

    public function produk()
    {
        $produk = [
            [
                'nama' => 'Air Force 1',
                'tahun' => '1982',
                'deskripsi' => 'Sepatu basket pertama yang menggunakan teknologi Air cushioning',
                'gambar' => '/images/air-force-1.jpg',
                'ikon' => 'bi-airplane'
            ],
            [
                'nama' => 'Air Max 90',
                'tahun' => '1990', 
                'deskripsi' => 'Menggunakan visible air unit yang revolusioner',
                'gambar' => '/images/air-max-90.jpg',
                'ikon' => 'bi-lightning'
            ],
            [
                'nama' => 'Air Jordan 1',
                'tahun' => '1985',
                'deskripsi' => 'Kolaborasi pertama dengan Michael Jordan',
                'gambar' => '/images/jordan-1.jpg',
                'ikon' => 'bi-trophy'
            ]
        ];

        return view('produk', ['produk' => $produk]);
    }

    public function profil(Request $request)
    {
        $username = $request->query('username');
        return view('profile', ['username' => $username]);
    }
}