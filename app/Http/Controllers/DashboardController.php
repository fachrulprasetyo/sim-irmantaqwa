<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $anggota = Anggota::count();
        $data_sm = SuratMasuk::count();
        $data_sk = SuratKeluar::count();

        return view('dashboards.index')->with([
            'anggota' => $anggota,
            'data_sm' => $data_sm,
            'data_sk' => $data_sk
        ]);
    }
}
