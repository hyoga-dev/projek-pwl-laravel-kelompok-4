<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
{
    $posts = [
        [
            'title' => 'Digital Printing: Transformasi Cetak Menuju Era Digital',
            'excerpt' => 'Digital printing telah menjadi pilar utama dalam dunia percetakan modern, merevolusi cara kita mencetak gambar dan teks dengPanduan...',
            'image' => 'images/artikel1.png',
            'date' => '2026-05-01'
        ],
        [
            'title' => 'Apa Itu Digital Printing? ',
            'excerpt' => 'Digital Printing, metode cetak yang memadukan efisiensi, kualitas, dan kecepatan, telah menjadi pendukung utama bagi banyak industri....',
            'image' => 'images/artikel2.png',
            'date' => '2026-05-02'
        ],
        [
            'title' => 'Keunggulan Digital Printing Dibanding Teknik Cetak Lainnya',
            'excerpt' => 'Keunggulan digital printing Saat ini, digital printing menjadi pilihan utama dibandingkan metode pencetakan tradisional seperti...',
            'image' => 'images/artikel3.png',
            'date' => '2026-05-03'
        ],
    ];

    return view('blog', compact('posts'));
}
}
