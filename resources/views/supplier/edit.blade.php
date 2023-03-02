@extends('layouts.user')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Penulis</h1>
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
                    <div class="card-header">Data Penulis</div>
                    <div class="card-body">
                        <form action="{{route('supplier.update', $supplier->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama Supplier</label>
                                <input type="text" name="nama" value="{{$supplier->nama}}" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                 <label for="">Masukan Nomor Telepon</label>
                                <input type="text" name="telepon" value="{{$supplier->telepon}}" class="form-control @error('telepon') is-invalid @enderror">
                                @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="">Masukan Alamat</label>
                                <input type="text" name="alamat" value="{{$supplier->alamat}}" class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
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