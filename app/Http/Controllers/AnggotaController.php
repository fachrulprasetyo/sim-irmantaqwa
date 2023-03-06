<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->query('cari');

        if (!empty($cari)) {
            $data_anggota = Anggota::sortable()
                ->where('anggota.nama', 'like', '%' . $cari . '%')
                ->paginate(5)->onEachSide(2)->fragment('anggota');
        } else {
            $data_anggota = Anggota::sortable()->paginate(5)->onEachSide(2)->fragment('anggota');
        }

        //$data_anggota = [
        //    'data_anggota' => Anggota::sortable()->paginate(5)->onEachSide(2)->fragment('anggota'),
        //];

        return view('anggota.index')->with([
            'data_anggota' => $data_anggota,
            'cari' => $cari
        ]);


        //if ($request->has('cari')) {
        //    $data_anggota = Anggota::where('nama', 'LIKE', '%' . $request->cari . '%')->get();
        //} else {
        //    $data_anggota = Anggota::sortable()->paginate(5)->onEachSide(2)->fragment('anggota');
        //}
        return view('anggota.index', ['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
        $data_anggota = Anggota::create($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
            $data_anggota->avatar = $request->file('avatar')->getClientOriginalName();
            $data_anggota->save();
        }
        return redirect('/anggota')->with('sukses', 'Data Berhasil di Input!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.edit', ['anggota' => $anggota]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $anggota = Anggota::find($id);
        $anggota->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('image/', $request->file('avatar')->getClientOriginalName());
            $anggota->avatar = $request->file('avatar')->getClientOriginalName();
            $anggota->save();
        }
        return redirect('/anggota')->with('sukses', 'Data Berhasil di Update!');
    }

    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota')->with('sukses', 'Data Berhasil di Hapus!');
    }

    public function profile($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.profile', ['anggota' => $anggota]);
    }

    public function cetak_anggota()
    {
        $data_cetak_anggota = Anggota::get();
        return view('anggota.cetak_anggota', ['data_cetak_anggota' => $data_cetak_anggota]);
    }
}
