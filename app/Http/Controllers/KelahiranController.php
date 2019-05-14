<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table data kelahiran
    	$lahir = DB::table('data_kelahiran')->get();
 
    	// mengirim data kelahiran ke view index
    	return view('kelahiran',['lahir' => $lahir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $lahir = DB::table('data_kelahiran')
        ->where('nama_anak','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('kelahiran',['lahir' => $lahir]);
 
    }

    public function create()
    {
        // memanggil view tambah
        return view('tambahkelahiran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // insert data ke table data_kelahiran
        DB::table('data_kelahiran')->insert([
            'id_kelahiran' => $request->id_kelahiran,
            'no_akte' => $request->no_akte,
            'nama_anak' => $request->nama_anak,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'nama_bapak' => $request->nama_bapak,
            'nama_ibuk' => $request->nama_ibuk
        ]);
        // alihkan halaman ke halaman kelahiran
        return redirect('/kelahiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data kelahiran berdasarkan id yang dipilih
        $lahir = DB::table('data_kelahiran')->where('id_kelahiran',$id)->get();
        // passing data kelahiran yang didapat ke view edit.blade.php
        return view('editkelahiran',['lahir' => $lahir]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            // update data kelahiran
        DB::table('data_kelahiran')->where('id_kelahiran',$request->id)->update([
            'no_akte' => $request->no_akte,
            'nama_anak' => $request->nama_anak,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'nama_bapak' => $request->nama_bapak,
            'nama_ibuk' => $request->nama_ibuk
        ]);
        // alihkan halaman ke halaman kelahiran
        return redirect('/kelahiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data berdasarkan id yang dipilih
        DB::table('data_kelahiran')->where('id_kelahiran',$id)->delete();
        
        // alihkan halaman ke halaman kelahiran
        return redirect('/kelahiran');
    }
}
