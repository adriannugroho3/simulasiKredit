<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function hitung(Request $request)
    {
        $otr = $request->otr;
        $odp = $request->dp;
        $dp = $otr * ($request->dp / 100);
        $jangkaWaktu = $request->jangka_waktu;
        $pokokUtang = $otr - $dp;

        // Menentukan bunga
        if ($jangkaWaktu <= 12) {
            $bunga = 0.12;
        } elseif ($jangkaWaktu <= 24) {
            $bunga = 0.14;
        } else {
            $bunga = 0.165;
        }

        // Menghitung angsuran per bulan
        $angsuran = ($pokokUtang + ($pokokUtang * $bunga)) / $jangkaWaktu;

        return view('layouts.index', [
            'angsuran' => round($angsuran),
            'pokok_utang' => $pokokUtang,
            'bunga' => $bunga * 100,
            'jangkawaktu' => $jangkaWaktu,
            'odp' => $odp,
        ]);
    }
}
