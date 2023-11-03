<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use DataTables;

class PegawaiController extends Controller
{

    public function getdata()
    {
        $data = Pegawai::select('id', 'nama', 'nip', 'jabatan', 'gol', 'status', 'unit')->get();

        return DataTables::of($data)->toJson(); 
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pegawai.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $isi = "harus di isi.";
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|numeric',
            'jabatan' => 'required',
            'gol' => 'required',
            'unit' => 'required',
            'status' => 'required'
        ], [
            'nama.required' => 'Nama ' . $isi,
            'nip.required' => 'NIP/NIK ' .$isi,
            'nip.numeric' => 'NIP/NIK harus berupa angka',
            'unit.required' => 'Unit ' . $isi,
            'status.required' => 'Status ' . $isi
        ]);

        $data = $request->except('_token');
        Pegawai::create($data);
        return redirect('/pegawai')->with('done', 'Berhasil Menambahkn Pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai, $id)
    {
        Pegawai::findOrFail($id)->delete();

        return redirect('/pegawai')->with('delete', 'Pegawai berhasil di hapus');
    }
}
