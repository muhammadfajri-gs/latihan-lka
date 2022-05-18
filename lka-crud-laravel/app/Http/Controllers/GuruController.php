<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    // * VIEW DATA
    public function index()
    {
    	// mengambil data dari table guru
    	$guru = DB::table('guru')->get();

    	// mengirim data guru ke view index
    	return view('index',['guru' => $guru]);

    }

    // * ADD DATA
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table guru
        DB::table('guru')->insert([
            'guru_nama' => $request->nama,
            'guru_pendidikan' => $request->pendidikan,
            'guru_umur' => $request->umur,
            'guru_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman guru
        return redirect('/guru');

    }

    // * EDIT DATA
    public function edit($id)
    {
        // mengambil data guru berdasarkan id yang dipilih
        $guru = DB::table('guru')->where('guru_id',$id)->get();
        // passing data guru yang didapat ke view edit.blade.php
        return view('edit',['guru' => $guru]);

    }

    public function update(Request $request)
    {
        // update data guru
        DB::table('guru')->where('guru_id',$request->id)->update([
            'guru_nama' => $request->nama,
            'guru_pendidikan' => $request->pendidikan,
            'guru_umur' => $request->umur,
            'guru_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman guru
        return redirect('/guru');
    }

    public function hapus($id)
    {
        // menghapus data guru berdasarkan id yang dipilih
        DB::table('guru')->where('guru_id',$id)->delete();

        // alihkan halaman ke halaman guru
        return redirect('/guru');
    }
}