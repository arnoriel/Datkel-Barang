@extends('layouts.user')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Barang</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Barang</div>
                    <div class="card-body">
                        <form action="{{route('barang.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama Barang</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                 <label for="">Masukan Nama Satuan</label>
                                 <select class="form-select" aria-label="Default select example" name="satuan" id="" >
                                    <option selected>Select Satuan</option>
                                   <option>Unit</option>
                                   <option>Kuantitas</option>
                                   <option>Lusin</option>
                                   <option>Gross</option>
                                   <option>Rim</option>
                                   <option>Kodi</option>
                                   <option>Buah</option>
                                   <option>Pasang</option>
                                   <option>Karat</option>
                                   <option>Bungkus</option>
                                   <option>Keping</option>
                                   <option>Batang</option>
                                   <option>Lembar</option>
                                   <option>Potong</option>
                                </select>
                                <label for="">Masukan Jenis Barang</label>
                                <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror">
                                @error('jenis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="">Masukan Stok Barang</label>
                                <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                                @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection