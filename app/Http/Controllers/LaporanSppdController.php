<?php

namespace App\Http\Controllers;

use App\Models\LaporanSppd;
use App\Models\Sppd;
use App\Models\SuratTugas;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class LaporanSppdController extends Controller
{

    public function getDataSt(Request $request)
    {
        $value = $request->input('value');
        $data = SuratTugas::with('pegawai')->where('nmr_srt_tgs', '=', $value)->get(); 
        
        return response()->json($data);
    }
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
        $sppd = Sppd::where('status', 'active')->where('no_sp2d', '!=', 0)->get();
        $st = SuratTugas::select('nmr_srt_tgs')->distinct('nmr_srt_tgs')->get();
        return view('laporansppd.create', ['st' => $st, 'sppd' => $sppd]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'surat_tugas' => 'required',
        //     // 'radio' => 'required'
        // ]);

        $namaUpload = '';
        if($request->hasFile('upload_bukti')){
            $ext = $request->file('upload_bukti')->getClientOriginalExtension();
            $namaUpload = uniqid().'.' . $ext;
            $request->file('upload_bukti')->storeAs('/public/uploads/laporan', $namaUpload, 'local');
        }
        // $selectSt = SuratTugas::where('nmr_srt_tgs', $request->surat_tugas)->where('pegawai_id', $request->input('radio'))->first();
        $laporan = LaporanSppd::create([
            'st_id' => $request->st_id,
            'sppd_id' => $request->sppd_id,//
            'maskapai_pergi' => $request->maskapai_pergi,
            'kode_booking_pergi' => $request->kode_booking_pergi,
            'no_tiket_pergi' => $request->no_tiket_pergi,
            'harga_pergi' => $request->harga_pergi,
            'taksi_asal_pergi' => $request->taksi_asal_pergi,
            'taksi_tujuan_pergi' => $request->taksi_tujuan_pergi,
            'tgl_pergi' => $request->tgl_pergi,
            'tgl_pulang' => $request->tgl_pulang,
            'maskapai_pulang' => $request->maskapai_pulang,
            'kode_booking_pulang' => $request->kode_booking_pulang,
            'no_tiket_pulang' => $request->no_tiket_pulang,
            'harga_pulang' => $request->harga_pulang,
            'taksi_asal_pulang' => $request->taksi_asal_pulang,
            'taksi_tujuan_pulang' => $request->taksi_tujuan_pulang,
            'tgl_masuk_hotel' => $request->tgl_masuk_hotel,
            'tgl_keluar_hotel' => $request->tgl_keluar_hotel,
            'jumlah_hari_hotel' => $request->jumlah_hari_hotel,
            'nama_hotel' => $request->nama_hotel,
            'no_kamar' => $request->no_kamar,
            'tarif' => $request->tarif,
            'total' => $request->total,
            'bukti' => $namaUpload
        ]);

        $laporan->save();
        $updateSppd = Sppd::find($request->sppd_id);
        $updateSppd->status = 'deactive';
        $updateSppd->save();

        // $selectSt->update([
        //     'laporan_id' => $laporan->id
        // ]);

        return redirect('/surat-tugas')->with(['success' => 'Laporan Sppd Berhasil Di Buat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(LaporanSppd $laporanSppd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LaporanSppd $laporanSppd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LaporanSppd $laporanSppd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LaporanSppd $laporanSppd)
    {
        //
    }
}
