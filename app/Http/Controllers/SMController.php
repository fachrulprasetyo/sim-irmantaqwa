<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SMController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty('$cari')) {
            $data_sm = SuratMasuk::sortable()
                ->where('surat_masuk.perihal', 'like', '%' . $cari . '%')
                ->paginate(5)->onEachSide(2)->fragment('surat_masuk');
        } else {
            $data_sm = SuratMasuk::sortable()->paginate(5)->onEachSide(2)->fragment('surat_masuk');
        }

        return view('surat_masuk.index')->with([
            'data_sm' => $data_sm,
            'cari' => $cari
        ]);
    }

    public function create(Request $request)
    {
        //dd($request->all());
        $data_sm = SuratMasuk::create($request->all());
        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('file_upload_sm/', $request->file('file_surat')->getClientOriginalName());
            $data_sm->file_surat = $request->file('file_surat')->getClientOriginalName();
            $data_sm->save();
        }
        return redirect('/surat_masuk')->with('sukses', 'Data Berhasil di Input!');
    }

    public function edit($id)
    {
        $sm = SuratMasuk::find($id);
        return view('surat_masuk.edit', ['surat_masuk' => $sm]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data_sm = SuratMasuk::find($id);
        $data_sm->update($request->all());
        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('file_upload_sm/', $request->file('file_surat')->getClientOriginalName());
            $data_sm->file_surat = $request->file('file_surat')->getClientOriginalName();
            $data_sm->save();
        }
        return redirect('/surat_masuk')->with('sukses', 'Data Berhasil di Update!');
    }

    public function delete($id)
    {
        $data_sm = SuratMasuk::find($id);
        $data_sm->delete();
        return redirect('/surat_masuk')->with('sukses', 'Data Berhasil di Hapus!');
    }

    public function surat_masuk_form()
    {
        return view('surat_masuk.surat_masuk_form');
    }

    public function cetak_data_pertanggal($tgl_awal, $tgl_akhir)
    {
        //dd(["Tanggal Awal = " . $tgl_awal, "Tanggal Akhir = " . $tgl_akhir]);

        $cetak_pertanggal = SuratMasuk::all()->whereBetween('tgl_surat', [$tgl_awal, $tgl_akhir]);
        //$sum_total = SuratMasuk::all()->whereBetween('tgl_surat', [$tgl_awal, $tgl_akhir])
        // ->sum('total');

        return view('surat_masuk.cetak_sm_pertanggal', compact('cetak_pertanggal'))->with([
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir
            //'sum_total' => $sum_total
        ]);
    }
}
