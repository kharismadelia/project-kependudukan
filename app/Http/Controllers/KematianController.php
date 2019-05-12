<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data_penduduk;
use App\Data_kematian;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table data
        $kematian = Data_kematian::with(['penduduks'])
        ->get();
 
        // mengirim data kelahiran ke view index
        return view('kematian', compact('kematian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduk = Data_penduduk::orderBy('id_penduduk', 'ASC')->get();
        // memanggil view tambah
        return view('tambahkematian', compact('penduduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('data_kematian')->insert([
            'id_penduduk' => $request->id_penduduk,
            'tgl_meninggal' => $request->tgl_meninggal,
            'tempat_meninggal' => $request->tempat_meninggal,
            'keterangan' => $request->keterangan
        ]);
    // alihkan halaman ke halaman kelahiran
        return redirect('/kematian');
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
        $kematian = Data_kematian::with(['penduduks'])->where('id_kematian',$id)->get();
        $penduduk = Data_penduduk::orderBy('id_penduduk', 'ASC')->get();
        // passing data kelahiran yang didapat ke view edit.blade.php
        return view('editkematian',compact('kematian', 'penduduk'));
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
        DB::table('data_kematian')->where('id_kematian', $id)->update([
            'id_penduduk' => $request->id_penduduk,
            'tgl_meninggal' => $request->tgl_meninggal,
            'tempat_meninggal' => $request->tempat_meninggal,
            'keterangan' => $request->keterangan
        ]);
        // alihkan halaman ke halaman kelahiran
        return redirect('kematian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('data_kematian')->where('id_kematian',$id)->delete();
        
        // alihkan halaman ke halaman kelahiran
        return redirect('kematian');
    }
}
