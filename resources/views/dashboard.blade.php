@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Jumlah Data Supplier</h5>
      <p class="card-text">
        <div class="large">{{ DB::table('suppliers')->count(); }}</div>
      </p>
      <a href="/supplier" class="btn btn-success">Cari di Supplier</a>
    </div>
    </div>
  </div>

    <div class="col-sm">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Jumlah Data Barang</h5>
      <p class="card-text">
        <div class="large">{{ DB::table('barangs')->count(); }}</div>
      </p>
      <a href="/barang" class="btn btn-warning">Cari di Barang</a>
    </div>
  </div>
    </div>
    <div class="col-sm">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Jumlah Data Barang Masuk</h5>
      <p class="card-text">
        <div class="large">{{ DB::table('barangmasuks')->count(); }}</div>
      </p>
      <a href="/barangmasuk" class="btn btn-danger">Cari di Barang Masuk</a>
    </div>
  </div>
    </div>
</div>
@endsection