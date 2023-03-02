<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Alert;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $supplier = new Supplier;
        $supplier->nama = $request->nama;
        $supplier->telepon = $request->telepon;
        $supplier->alamat = $request->alamat;
        $supplier->save();
        Alert::success('Supplier Berhasil di Tambah', 'Supplier sudah masuk Database');
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->nama = $request->nama;
        $supplier->telepon = $request->telepon;
        $supplier->alamat = $request->alamat;
        $supplier->save();
        Alert::success('Supplier Berhasil di Edit', 'Supplier sudah masuk Database');
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        Alert::success('Supplier Berhasil di Hapus', 'Supplier sudah di DROP dari Database');
        return redirect()->route('supplier.index');
    }
}
