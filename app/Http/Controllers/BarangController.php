<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'satuan' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang = new Barang;
        $barang->nama = $request->nama;
        $barang->satuan = $request->satuan;
        $barang->jenis = $request->jenis;
        $barang->stok = $request->stok;
        $barang->save();
        Alert::success('Barang Berhasil di Tambah', 'Barang sudah masuk Database');
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'satuan' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama = $request->nama;
        $barang->satuan = $request->satuan;
        $barang->jenis = $request->jenis;
        $barang->stok = $request->stok;
        $barang->save();
        Alert::success('Barang Berhasil di Edit', 'Barang sudah masuk Database');
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        Alert::success('Barang Berhasil di Hapus', 'Barang sudah di DROP dari Database');
        return redirect()->route('barang.index');
    }
}
