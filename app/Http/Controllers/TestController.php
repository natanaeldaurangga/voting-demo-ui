<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function daftarPemilihan()
    {
        return view('pemilihan.daftarPemilihan');
    }

    public function buatPemilihan()
    {
        return view('pemilihan.buatPemilihan');
    }

    public function detailPemilihan()
    {
        return view('pemilihan.detailPemilihan');
    }

    public function kandidatPemilihan()
    {
        return view('kandidat.daftarPemilihan');
    }

    public function daftarKandidat()
    {
        return view('kandidat.daftarKandidat');
    }

    public function tambahKandidat()
    {
        return view('kandidat.tambahKandidat');
    }

    public function tambahPemilih()
    {
        return view('pemilih.tambahPemilih');
    }

    public function pemilihPemilihan()
    {
        return view('pemilih.daftarPemilihan');
    }

    public function daftarPemilih()
    {
        return view('pemilih.daftarPemilih');
    }

    public function voting()
    {
        return view('voting.index');
    }
}
