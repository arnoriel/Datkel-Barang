<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Alert;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangmasuk=Barangmasuk::all();
        return view ('barangmasuk.index', compact ('barangmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier=Supplier::all();
        $barang=Barang::all();
        return view ('barangmasuk.create', compact ('supplier', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required',
            'supplier_id' => 'required',
            'barang_id' => 'required',
            'qty' => 'required',
        ]);

        $barangmasuk = new Barangmasuk;
        $barangmasuk->tanggal = $request->tanggal;
        $barangmasuk->supplier_id = $request->supplier_id;
        $barangmasuk->barang_id = $request->barang_id;
        $barangmasuk->qty = $request->qty;
        $barangmasuk->save();
        Alert::success('Input Barang Berhasil di Tambah', 'Input Barang sudah masuk Database');
        return redirect('/barangmasuk');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = Supplier::all();
        $barang = Barang::all();
        $barangmasuk = Barangmasuk::findOrFail($id);
        return view('barangmasuk.show', compact('barangmasuk', 'supplier', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::all();
        $barang = Barang::all();
        $barangmasuk = Barangmasuk::findOrFail($id);
        return view('barangmasuk.edit', compact('barangmasuk', 'supplier', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required',
            'supplier_id' => 'required',
            'barang_id' => 'required',
            'qty' => 'required',
        ]);

        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->tanggal = $request->tanggal;
        $barangmasuk->supplier_id = $request->supplier_id;
        $barangmasuk->barang_id = $request->barang_id;
        $barangmasuk->qty = $request->qty;
        $barangmasuk->save();
        Alert::success('Input Barang Berhasil di Edit', 'Input Barang sudah masuk Database');
        return redirect('/barangmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barangmasuk = Barangmasuk::findOrFail($id);
        $barangmasuk->delete();
        Alert::success('Input Barang Berhasil di hapus', 'Input Barang sudah di DROP dari Database');
        return redirect()->route('barangmasuk.index');
    }
}
