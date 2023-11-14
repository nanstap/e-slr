<?php

namespace App\Http\Controllers;

use App\Models\Sppd;
use Illuminate\Http\Request;

class SppdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sppd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $noSpm = $request->input('no_spm');
        // $noSppd = $request->input('no_sp2d');
        // $tglSppd = $request->input('tgl_sp2d');
        $namaUpload = '';
        if($request->hasFile('upload_sppd')){
            $ext = $request->file('upload_sppd')->getClientOriginalExtension();
            $namaUpload = uniqid().'.'. $ext;
            $request->file('upload_sppd')->storeAs('public/uploads/sppd', $namaUpload, 'local');
            // return $namaUpload;
        }
        // $tglPrgi =$request->input('tgl_pergi');
        // $maskapai_prg =$request->input('maskapai_pergi');
        // $kode_booking_prg =$request->input('kode_booking_pergi');
        // $no_tiket_pergi = $request->input('no_tiket_pergi');
        // $harga_pergi =$request->input('harga_pergi');
        // $tanggal_pulang =$request->input('tgl_pulang');
        // $maskapai_pulang=$request->input('maskapai_pulang');
        // $kode_booking_plng=$request->input('kode_booking_pulang');
        // $no_tiket_pulang=$request->input('no_tiket_pulang');
        // $harga_plng=$request->input('harga_pulang');
        // $tgl_msk_hotel=$request->input('tgl_masuk_hotel');
        // $tgl_keluar_hotel=$request->input('tgl_keluar_hotel');
        // $jumlah_hari_hotel=$request->input('jumlah_hari_hotel');
        // $nama_hotel=$request->input('nama_hotel');
        // $no_kmr=$request->input('no_kamar');
        // $trf=$request->input('tarif');
        // $total=$request->input('total');
        
        
        
        $newSppd = new Sppd([
           "no_sp2d" => $request->no_sp2d,
           "tgl_sp2d" => $request->tgl_sp2d,
           "upload_sppd" => $namaUpload,
        ]);
            // $newSppd->no_spm = $request->no_spm
           
            // 'tgl_pergi' => $tglPrgi;
            // 'maskapai_pergi' => $maskapai_prg,
            // 'kode_booking_pergi' => $kode_booking_prg,
            // 'no_tiket_pergi' => $no_tiket_pergi,
            // 'harga_pergi' => $harga_pergi,
            // 'tgl_pulang' => $tanggal_pulang,
            // 'maskapai_pulang' => $maskapai_pulang,
            // 'kode_booking_pulang' => $kode_booking_plng,
            // 'no_tiket_pulang' => $no_tiket_pulang,
            // 'harga_pulang' => $harga_plng,
            // 'tgl_masuk_hotel' => $tgl_msk_hotel,
            // 'tgl_keluar_hotel' => $tgl_keluar_hotel,
            // 'jumlah_hari_hotel' => $jumlah_hari_hotel,
            // 'nama_hotel' => $nama_hotel,
            // 'no_kamar' => $no_kmr,
            // 'tarif' => $trf,
            // 'total' => $total
        
        $newSppd->save();
    
        return redirect('/surat-tugas')->with(['done' => 'Berhasil Menambahkan SPPD']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sppd $sppd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sppd $sppd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sppd $sppd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sppd $sppd)
    {
        //
    }
}
