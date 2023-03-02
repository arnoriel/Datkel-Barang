@extends('layouts.user')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Barang Masuk</h1>
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
                    <div class="card-header">Data Barang Masuk</div>
                    <div class="card-body">
                        <form action="{{route('barangmasuk.update', $barangmasuk->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Tanggal</label>
                                <input type="date" name="tanggal"  value="{{$barangmasuk->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                                @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                 <label for="">Masukan Supplier</label>
                                 <select class="form-select" aria-label="Default select example" name="supplier_id" id="" >
                                    <option selected>Select Supplier</option>
                                    @foreach($supplier as $item)
                                    <option value="{{$item->id}}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                <label for="">Masukan Barang</label>
                                 <select class="form-select" aria-label="Default select example" name="barang_id" id="" >
                                    <option selected>Select Goods</option>
                                    @foreach($barang as $data)
                                    <option value="{{$data->id}}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                <label for="">Masukan Kuantitas</label>
                                <input type="number" name="qty" value="{{$barangmasuk->qty}}" class="form-control @error('qty') is-invalid @enderror">
                                @error('qty')
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