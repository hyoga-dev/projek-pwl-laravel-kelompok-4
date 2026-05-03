<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about()
        {
         $members = [
    [
        'nama' => 'Daviq Cahyo Lukmanto',
        'nim' => '24104410043',
        'peran' => 'Melakukan Coding Halaman Home',
        'foto' => 'images/daviq.png'
    ],
    [
        'nama' => 'Cahyo Saputra',
        'nim' => '24104410078',
        'peran' => 'Melakukan Coding Halaman About',
        'foto' => 'images/cahyo.png'
    ],
    [
        'nama' => 'Hardi Prayoga',
        'nim' => '24104410079',
        'peran' => 'Pemuatan Projek dan Melakukan Coding Halaman Artikel',
        'foto' => 'images/yoga.png'
    ],
    [
        'nama' => 'Putri Perwitasari',
        'nim' => '24104410080',
        'peran' => 'Melakukan Coding Halaman Kontak',
        'foto' => 'images/putri.png'
    ],
];

            return view('about', compact('members'));
        }
}
