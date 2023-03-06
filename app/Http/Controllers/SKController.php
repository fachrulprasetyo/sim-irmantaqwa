<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SKController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty('$cari')) {
            $data_sk = SuratKeluar::sortable()
                ->where('surat_keluar.perihal', 'like', '%' . $cari . '%')
                ->paginate(5)->onEachSide(2)->fragment('surat_keluar');
        } else {
            $data_sk = SuratKeluar::sortable()->paginate(5)->onEachSide(2)->fragmet('surat_keluar');
        }

        return view('surat_keluar.index')->with([
            'data_sk' => $data_sk,
            'cari' => $cari
        ]);
    }

    public function create(Request $request)
    {
        $data_sk = SuratKeluar::create($request->all());
        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('file_upload_sk/', $request->file('file_surat')->getClientOriginalName());
            $data_sk->file_surat = $request->file('file_surat')->getClientOriginalName();
            $data_sk->save();
        }
        return redirect('/surat_keluar')->with('sukses', 'Data Berhasil di Input!');
    }

    public function edit($id)
    {
        $sk = SuratKeluar::find($id);
        return view('surat_keluar.edit', ['surat_keluar' => $sk]);
    }

    public function update(Request $request, $id)
    {
        $data_sk = SuratKeluar::find($id);
        $data_sk->update($request->all());
        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('file_upload_sk/', $request->file('file_surat')->getClientOriginalName());
            $data_sk->file_surat = $request->file('file_surat')->getClientOriginalName();
            $data_sk->save();
        }
        return redirect('/surat_keluar')->with('sukses', 'Data Berhasil di Update!');
    }

    public function delete($id)
    {
        $data_sk = SuratKeluar::find($id);
        $data_sk->delete();
        return redirect('/surat_keluar')->with('sukses', 'Data Berhasil di Hapus!');
    }

    public function surat_keluar_form()
    {
        return view('surat_keluar.surat_keluar_form');
    }

    public function cetak_data_pertanggal($tgl_awal, $tgl_akhir)
    {
        $cetak_pertanggal = SuratKeluar::all()->whereBetween('tgl_surat', [$tgl_awal, $tgl_akhir]);
        return view('surat_keluar.cetak_sk_pertanggal', compact('cetak_pertanggal'))->with([
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir
        ]);
    }
}
