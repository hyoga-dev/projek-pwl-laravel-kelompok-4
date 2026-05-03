<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $heroContent = (object) [
            "title" => "Yoga Printing",
            "tagline" => "Yoga Printing adalah perusahaan yang bergerak di bidang jasa digital printing yang menyediakan berbagai layanan percetakan seperti banner, stiker, kartu nama, dan media promosi lainnya. Dengan memanfaatkan teknologi cetak digital, Yoga Printing mampu memberikan hasil yang cepat, berkualitas tinggi, dan sesuai dengan kebutuhan pelanggan, baik untuk keperluan personal maupun bisnis.",
        ];

        $websiteInfo = (object) [
            "namaKelompok" => "Kelompok 2",
            "semester" => "4B"
        ];

        return view('home', compact('heroContent', 'websiteInfo'));
    }
}