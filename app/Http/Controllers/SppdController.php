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
        $noSpm = $request->input('no_spm');
        $noSppd =$request->input('no_sp2d');
        $tglSppd =$request->input('tgl_sp2d');
        $tglPrgi =$request->input('tgl_pergi');
        $maskapai_prg =$request->input('maskapai_pergi');
        $kode_booking_prg =$request->input('kode_booking_pergi');
        $no_tiket_pergi = $request->input('no_tiket_pergi');
        $harga_pergi =$request->input('harga_pergi');
        $tanggal_pulang =$request->input('tgl_pulang');
        $maskapai_pulang=$request->input('maskapai_pulang');
        $kode_booking_plng=$request->input('kode_booking_pulang');
        $no_tiket_pulang=$request->input('no_tiket_pulang');
        $harga_plng=$request->input('harga_pulang');
        $tgl_msk_hotel=$request->input('tgl_masuk_hotel');
        $tgl_keluar_hotel=$request->input('tgl_keluar_hotel');
        $jumlah_hari_hotel=$request->input('jumlah_hari_hotel');
        $nama_hotel=$request->input('nama_hotel');
        $no_kmr=$request->input('no_kamar');
        $trf=$request->input('tarif');
        $total=$request->input('total');
        
        
        for($i = 0; $i < sizeof($noSppd); $i++){
            $newSppd = new Sppd([
                'no_spm' => $noSpm[$i],
                'no_sp2d' => $noSppd[$i],
                'tgl_sp2d' => $tglSppd[$i],
                'tgl_pergi' => $tglPrgi[$i],
                'maskapai_pergi' => $maskapai_prg[$i],
                'kode_booking_pergi' => $kode_booking_prg[$i],
                'no_tiket_pergi' => $no_tiket_pergi[$i],
                'harga_pergi' => $harga_pergi[$i],
                'tgl_pulang' => $tanggal_pulang[$i],
                'maskapai_pulang' => $maskapai_pulang[$i],
                'kode_booking_pulang' => $kode_booking_plng[$i],
                'no_tiket_pulang' => $no_tiket_pulang[$i],
                'harga_pulang' => $harga_plng[$i],
                'tgl_masuk_hotel' => $tgl_msk_hotel[$i],
                'tgl_keluar_hotel' => $tgl_keluar_hotel[$i],
                'jumlah_hari_hotel' => $jumlah_hari_hotel[$i],
                'nama_hotel' => $nama_hotel[$i],
                'no_kamar' => $no_kmr[$i],
                'tarif' => $trf[$i],
                'total' => $total[$i]
            ]);
            $newSppd->save();
        }
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
