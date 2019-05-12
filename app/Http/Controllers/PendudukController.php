<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data_penduduk;
use App\Data_kelahiran;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table data
        $penduduk = Data_penduduk::with(['kelahirans'])
        ->get();
 
        // mengirim data kelahiran ke view index
        return view('penduduk', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelahiran = Data_kelahiran::orderBy('id_kelahiran', 'ASC')->get();
        // memanggil view tambah
        return view('tambahpenduduk', compact('kelahiran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table data_penduduk
        DB::table('data_penduduk')->insert([
            'id_kelahiran' => $request->id_kelahiran,
            'nik' => $request->nik,
            'agama' => $request->agama,
            'kabupaten_kota' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pend_akhir,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan
        ]);
    // alihkan halaman ke halaman kelahiran
        return redirect('/penduduk');
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
        $penduduk = Data_penduduk::with(['kelahirans'])->where('id_penduduk',$id)->get();
        $kelahiran = Data_kelahiran::orderBy('id_kelahiran', 'ASC')->get();
        // passing data kelahiran yang didapat ke view edit.blade.php
        return view('editpenduduk',compact('penduduk', 'kelahiran'));
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
        //update data penduduk
        DB::table('data_penduduk')->where('id_penduduk', $id)->update([
            'id_kelahiran' => $request->id_kelahiran,
            'nik' => $request->nik,
            'agama' => $request->agama,
            'kabupaten_kota' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pend_akhir,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan
        ]);
        // alihkan halaman ke halaman kelahiran
        return redirect('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_penduduk')->where('id_penduduk',$id)->delete();
        
        // alihkan halaman ke halaman kelahiran
        return redirect('penduduk');
    }
}
