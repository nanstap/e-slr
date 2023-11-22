<?php

namespace App\Http\Controllers;

use App\Models\Spm;
use App\Models\SuratTugas;
use Illuminate\Http\Request;

class SpmController extends Controller
{
    public function getSpm(){
        $spm = Spm::all();

        return response()->json($spm, 200);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('spm.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $st = SuratTugas::select('nmr_srt_tgs')->distinct('nmr_srt_tgs')->get();
        return view('spm.create',['st' => $st]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_spm' => 'required',
            'tgl_spm' => 'required',
            'doc' => 'required'
        ], [
            'no_spm.required' => 'Harus Di Isi',
            'tgl_spm.required' => 'Harus Di Isi',
            'doc.required' => 'Harus Di Isi'
        ]);
        $namaFile = '';

        if($request->hasFile('doc')){
            $ext = $request->file('doc')->getClientOriginalExtension();
            $namaFile = uniqid() . '.' . $ext;
            $request->file('doc')->storeAs('/public/uploads/spm', $namaFile, 'local');
        }

        $newSpm = new Spm;
        $newSpm->no_spm = $request->no_spm;
        $newSpm->tgl_spm = $request->tgl_spm;
        $newSpm->doc = $namaFile;
        $newSpm->save();
        
        $stSelected = $request->input('surat');
        for($i = 0; $i < sizeof($stSelected); $i++){
            SuratTugas::where('nmr_srt_tgs', $stSelected[$i])->update([
                'spm_id' => $newSpm->id
            ]);
        }

        return redirect('/surat-tugas')->with(['done' => 'Berhasil Menambahkan SPM']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Spm $spm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spm $spm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spm $spm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spm $spm)
    {
        //
    }
}
