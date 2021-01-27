<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman Home'
        ];
        return view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'judul' => 'Halaman About'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'judul' => 'Halaman Contact'
        ];
        return view('pages/contact', $data);
    }
}
