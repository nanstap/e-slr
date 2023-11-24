<?php

namespace App\Http\Controllers;

use App\Exports\Rekap;
use App\Models\LaporanSppd;
use App\Models\SuratTugas;
use App\Models\Pegawai;
use App\Models\Sppd;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Excel;

class SuratTugasController extends Controller
{
    /**
     * Memberi Session, Ketika User Ingin Input Surat Tugas Lalu Pindah Ke Input SPPD Agar Inputannya Tidak Hilang
     */
    public function getSession(Request $request)
    {
        session()->put('uraian_tugas', $request->input('uraian_tugas'));
        return redirect('/sppd/add');
    }
    
    /**
     * Ambil Semua Data Surat Tugas Untuk Di Tampilkan Ke Data Table
     */
    public function getSurat()
    {
        $datast = SuratTugas::all();
        return DataTables::of($datast)
        

        //Kepakai

        ->addColumn('pegawai_name', function ($datast){
            return $datast->pegawai->nama;
        })
        ->addColumn('pegawai_status', function ($datast){
            return $datast->pegawai->status;
        })
        ->addColumn('nodin', function ($datast){
            return $datast->no_nodin;
        })
        ->addColumn('id', function ($datast){
            return $datast->id;
        })
        // ->addColumn('spm_id', function($datast)  {
        //     return $datast->spm_id;
        // })
        // ->addColumn('st_id', function($datast)  {
        //     return $datast->laporan->st_id;
        // })

        // ->addColumn('no_sp2d', function ($dataSurat){
        //     return $dataSurat->sppd->no_sp2d;
        // })
        // ->addColumn('no_spm', function ($dataSurat){
        //     return $dataSurat->sppd->no_spm;
        // })
        // ->addColumn('tgl_sp2d', function ($dataSurat){
        //     return $dataSurat->sppd->tgl_sp2d;
        // })
        // ->addColumn('tgl_pergi', function ($dataSurat){
        //     return $dataSurat->sppd->tgl_pergi;
        // })
        // ->addColumn('maskapai_pergi', function ($dataSurat){
        //     return $dataSurat->sppd->maskapai_pergi;
        // })
        // ->addColumn('kode_booking_pergi', function ($dataSurat){
        //     return $dataSurat->sppd->kode_booking_pergi;
        // })
        // ->addColumn('no_tiket_pergi', function ($dataSurat){
        //     return $dataSurat->sppd->no_tiket_pergi;
        // })
        // ->addColumn('harga_pergi', function ($dataSurat){
        //     return $dataSurat->sppd->harga_pergi;
        // })
        // ->addColumn('tgl_pulang', function ($dataSurat){
        //     return $dataSurat->sppd->tgl_pulang;
        // })
        // ->addColumn('maskapai_pulang', function ($dataSurat){
        //     return $dataSurat->sppd->maskapai_pulang;
        // })
        // ->addColumn('kode_booking_pulang', function ($dataSurat){
        //     return $dataSurat->sppd->kode_booking_pulang;
        // })
        // ->addColumn('no_tiket_pulang', function ($dataSurat){
        //     return $dataSurat->sppd->no_tiket_pulang;
        // })
        // ->addColumn('harga_pulang', function ($dataSurat){
        //     return $dataSurat->sppd->harga_pulang;
        // })
        // ->addColumn('tgl_masuk_hotel', function ($dataSurat){
        //     return $dataSurat->sppd->tgl_masuk_hotel;
        // })
        // ->addColumn('tgl_keluar_hotel', function ($dataSurat){
        //     return $dataSurat->sppd->tgl_keluar_hotel;
        // })
        // ->addColumn('jumlah_hari_hotel', function ($dataSurat){
        //     return $dataSurat->sppd->jumlah_hari_hotel;
        // })
        // ->addColumn('nama_hotel', function ($dataSurat){
        //     return $dataSurat->sppd->nama_hotel;
        // })
        // ->addColumn('no_kamar', function ($dataSurat){
        //     return $dataSurat->sppd->no_kamar;
        // })
        // ->addColumn('tarif', function ($dataSurat){
        //     return $dataSurat->sppd->tarif;
        // })
        // ->addColumn('sppd_id', function ($dataSurat){
        //     return $dataSurat->no_sppd;
        // })
        // ->addColumn('total', function ($dataSurat){
        //     return $dataSurat->sppd->total;
        // })
        ->make(true);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAll = SuratTugas::all();
        // foreach($surat as $srt){
        //     if($srt->sppd->no_spm === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        //     if($srt->sppd-> === null){
        //         return 'Belum di isi';
        //     }
        // }
        return view('surat.index', ['dataAll' => $dataAll]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $slr = Pegawai::where('status', 'SLR')->get();
        $non = Pegawai::where('status', 'NON SLR')->get();
        $sppd = Sppd::where('id', '!=', 1)->get();
        //buat input surat tugas
        return view('surat.create', ['slr' => $slr, 'non' => $non, 'sppd' => $sppd]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //validate gaboleh null
        $datval = $request->validate([
            'no_srt_tgs' => 'required',
            'tgl_srt_tgs' => 'required',
            'upload_st' => 'max:130',
            'upload_nd' => 'max:130',
            'upload_sp' => 'max:130',
            //'pegawai_[]' => 'required'
        ],  [
            'upload_st.max' => 'File Tidak Boleh Lebih Dari 13 KB', 
            'upload_nd.max' => 'File Tidak Boleh Lebih Dari 13 KB',
            'upload_sp.max' => 'File Tidak Boleh Lebih Dari 13 KB',
            // 'upload_st.required' => 'File Perlu Di Upload',
            // 'upload_st.mimetypes' => 'Format file tidak di dukung',
            // 'upload_nd.required' => 'File Perlu Di Upload',
            // 'upload_nd.mimetypes' => 'Format file tidak di dukung',
            // 'upload_sp.required' => 'File Perlu Di Upload',
            // 'upload_sp.mimetypes' => 'Format file tidak di dukung',
            'no_srt_tgs.required' => 'Nomor Surat Tugas harus diisi.',
            'tgl_srt_tgs.required' => 'Tanggal Surat Tugas harus diisi.',
            //'pegawai_[].required' => 'Kamu Harus Isi Nama Pegawai'
        ]);
        //redirect kalo datanya kosong
        // if(!$datval){
        //     return Redirect('/surat-tugas/add')->with(['error' => 'The Field Cannot Be Null']);
        // }
        //ambil pegawai
        //$NamaPegawai = Pegawai::find($request->nama);

        $PegawaiSelected = $request->input('pegawai_');
        $Pilih = implode(", ", $PegawaiSelected);
        $UnitPegawai = Pegawai::where('id', $request->pegawai_[0])->value('unit');
        // $sppdSelected = $request->input('no_sppd');
        $namaST = '';
        $namaND = '';
        $namaSP = '';


        if($request->hasFile('upload_st') && $request->hasFile('upload_nd') && $request->hasFile('upload_sp')){
            $extSt = $request->file('upload_st')->getClientOriginalExtension();
            $extNd = $request->file('upload_nd')->getClientOriginalExtension();
            $extSp = $request->file('upload_sp')->getClientOriginalExtension();
            $namaST = uniqid() . '_' . $request->no_srt_tgs . '.' . $extSt;
            $namaND = uniqid() . '_' . $request->no_srt_tgs . '.' . $extNd;
            $namaSP = uniqid() . '_' . $request->no_srt_tgs . '.' . $extSp;
            $request->file('upload_st')->storeAs('public/uploads/st', $namaST, 'local');
            $request->file('upload_nd')->storeAs('public/uploads/st', $namaND, 'local');
            $request->file('upload_sp')->storeAs('public/uploads/st', $namaSP, 'local');
        }
        
        $FormatNmr = $request->no_srt_tgs . " ST/SDL.1/" . date("Y");
        //Pegawa::a
        
        for($i = 0; $i < sizeof($PegawaiSelected); $i++)
        {
            $st = new SuratTugas;
            $st->nmr_srt_tgs = $FormatNmr;
            $st->tgl_srt_tgs = $request->tgl_srt_tgs;
            $st->pegawai_id = $PegawaiSelected[$i];
            $st->unit = $UnitPegawai;
            $st->tgl_perjadin_mulai = $request->tgl_perjadin_mulai;
            $st->tgl_perjadin_selesai = $request->tgl_perjadin_selesai;
            $st->kota_asal > $request->kota_asal;
            $st->kota_tujuan = $request->kota_tujuan;
            $st->uraian_tugas = $request->uraian_tugas;
            $st->no_nodin = $request->no_nodin . " ND/SDL.1/" . date('Y');
            $st->upload_st = $namaST;
            $st->upload_nd = $namaND;
            $st->upload_sp = $namaSP;

            // for($i2 = 0; $i2 < sizeof($sppdSelected); $i2++)
            // {
                // $st->no_sppd = 1;
            //}
            $st->save();

        }
        // $noSpm = $request->input('no_spm');
        // $noSppd =$request->input('no_sp2d');
        // $tglSppd =$request->input('tgl_sp2d');
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
        
        
        // for($i = 0; $i < $noSppd; $i++){
        //     $newSppd = new Sppd([
        //         'no_spm' => $noSpm[$i],
        //         'no_sp2d' => $noSppd[$i],
        //         'tgl_sp2d' => $tglSppd[$i],
        //         'tgl_pergi' => $tglPrgi[$i],
        //         'maskapai_pergi' => $maskapai_prg[$i],
        //         'kode_booking_pergi' => $kode_booking_prg[$i],
        //         'no_tiket_pergi' => $no_tiket_pergi[$i],
        //         'harga_pergi' => $harga_pergi[$i],
        //         'tgl_pulang' => $tanggal_pulang[$i],
        //         'maskapai_pulang' => $maskapai_pulang[$i],
        //         'kode_booking_pulang' => $kode_booking_plng[$i],
        //         'no_tiket_pulang' => $no_tiket_pulang[$i],
        //         'harga_pulang' => $harga_plng[$i],
        //         'tgl_masuk_hotel' => $tgl_msk_hotel[$i],
        //         'tgl_keluar_hotel' => $tgl_keluar_hotel[$i],
        //         'jumlah_hari_hotel' => $jumlah_hari_hotel[$i],
        //         'nama_hotel' => $nama_hotel[$i],
        //         'no_kamar' => $no_kmr[$i],
        //         'tarif' => $trf[$i]
        //     ]);
        //     $newSppd->save();
        // }

        // SuratTugas::create([
        //     'nmr_srt_tgs' => $FormatNmr,
        //     'tgl_srt_tgs' => $request->tgl_srt_tgs,
        //     'pegawai_id' => $request->nama,
        //     'unit' => $UnitPegawai,
        //     'tgl_perjadin_mulai' => $request->tgl_perjadin_mulai,
        //     'tgl_perjadin_selesai' => $request->tgl_perjadin_selesai,
        //     'kota_asal' => $request->kota_asal,
        //     'kota_tujuan' => $request->kota_tujuan,
        //     'uraian_tugas' => $request->uraian_tugas,
        //     'no_nodin' => $request->no_nodin,
        //     'no_sppd' => $request->no_sppd == 0 ? 'Belum Di Isi' : $request->no_sppd,
        // ]);
        return redirect('/surat-tugas')->with(['done' => 'Berhasil Menambahkan']);

    }

    /**
     * Export DataBase Surat Tugas Ke Excel
     */
    public function exportSurat()
    {
        return Excel::download(new Rekap, 'Rekap_Dinas_Luar.xlsx');
    }


    /**
     * Display the specified resource.
     */
    public function show(SuratTugas $suratTugas, $id)
    {
        //menampilkan semua data surat tugas dengan ajax
        $currentSt = DB::table('surat_tugas')
        ->where('surat_tugas.id', '=', $id)
        ->leftJoin('pegawais', 'surat_tugas.pegawai_id', '=', 'pegawais.id')
        ->leftJoin('spms', 'surat_tugas.spm_id', '=', 'spms.id')
        ->leftJoin('laporan_sppds', 'surat_tugas.id', '=', 'laporan_sppds.st_id')
        ->leftJoin('sppds', 'laporan_sppds.sppd_id', '=', 'sppds.id')
        ->select('surat_tugas.nmr_srt_tgs', 'surat_tugas.upload_st', 'surat_tugas.upload_nd', 'surat_tugas.upload_sp', 'sppds.upload_sppd', 'laporan_sppds.bukti', 'spms.doc')
        ->orderBy('surat_tugas.id', 'asc')
        ->get();
        return view('surat.view', ['currentSt'  => $currentSt]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratTugas $suratTugas, $id)
    {
        $allData = SuratTugas::find($id);
        $data = SuratTugas::where('id', $id)->value('nmr_srt_tgs');
        $sppd = Sppd::where('status', '!=', 'deactive')->where('id', '!=', 1)->get();
        $pegawai = Pegawai::all();
        $nomor = explode(' ', $data);
        $nmrSurat = $nomor[0];
        return view('surat.edit', ['nmrSurat' => $nmrSurat, 'allData' => $allData, 'pegawai' => $pegawai, 'sppd' => $sppd]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratTugas $suratTugas, $id)
    {
        $datval = $request->validate([
            'nmr_srt_tgs' => 'required',
            'tgl_srt_tgs' => 'required',
        ],  [
            'nmr_srt_tgs.required' => 'Nomor Surat Tugas harus diisi.',
            'tgl_srt_tgs.required' => 'Tanggal Surat Tugas harus diisi.',
            
        ]);
        $dataToUpdate = [
            'nmr_srt_tgs' => $request->nmr_srt_tgs . " ST/SDL.1/". date('Y'),
            'tgl_srt_tgs' => $request->tgl_srt_tgs,
            'pegawai_id' => $request->pegawai,
            //'unit' => $request->unit,
            'tgl_perjadin_mulai' => $request->tgl_prjadin_mulai,
            'tgl_perjadin_selesai' => $request->tgl_perjadin_selesai,
            'kota_asal' => $request->kota_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'uraian_tugas'=> $request->uraian_tugas,
            'no_nodin' => $request->no_nodin,
            // 'no_sppd' => $request->sppd,
        ];
        
        $allData = SuratTugas::findOrFail($id);
        $allData->sppd->id != 1 ? Sppd::find($allData->sppd->id)->update(['status' => 'active']) : '' ;
        $allData->update($dataToUpdate);

        $changeStat = Sppd::find($request->sppd);
        $changeStat->id != 1 ? $changeStat->update(['status' => 'deactive']) : '';

        return redirect('/surat-tugas')->with('done', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratTugas $suratTugas, $id)
    {
        $dess = SuratTugas::findOrFail($id);
        $dess->delete();

        return redirect('/surat-tugas')->with('delete', 'Surat Tugas Berhasil Di Hapus');
    }
}
