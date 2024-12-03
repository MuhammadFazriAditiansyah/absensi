<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function home(){
        return view('home');
    }

    function tampil(){
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
    }

    function tambah(){
        return view('siswa.tambah');
    }

    function submit(Request $request){
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->rombel = $request->rombel;
        $siswa->rayon = $request->rayon;
        $siswa->keterangan = $request->keterangan;
        $siswa->save();

        return redirect()->route('siswa.tampil')->with('success', 'Berhasil menambah data');
    }

    function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->rombel = $request->rombel;
        $siswa->rayon = $request->rayon;
        $siswa->keterangan = $request->keterangan;
        $siswa->update();

        return redirect()->route('siswa.tampil');
    }

    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.tampil');
    }
}
