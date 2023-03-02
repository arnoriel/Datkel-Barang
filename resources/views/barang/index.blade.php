@extends('layouts.user')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Barang</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
            
                      <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                          </li>
            
                          <li><a class="dropdown-item" href="#">Today</a></li>
                          <li><a class="dropdown-item" href="#">This Month</a></li>
                          <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                      </div>
            
                      <div class="card-body">
                        <h5 class="card-title">Data barang <a href="{{route('barang.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a></h5>
            
                        <table class="table table-borderless datatable">
                          <thead>
                            <tr>
                              <th scope="col">Nomor</th>
                              <th scope="col">Nama Barang</th>
                              <th scope="col">Satuan</th>
                              <th scope="col">Jenis Barang</th>
                              <th scope="col">Stok Barang</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $no=1 @endphp
                            @foreach ($barang as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->satuan}}</td>
                                        <td>{{$data->jenis}}</td>
                                        <td>{{$data->stok}}</td>
                              <td><form action="{{route('barang.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <a href="{{route('barang.edit',$data->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="bi bi-trash3"></i></button>
                            </form></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
            
                      </div>
            
                    </div>
                  </div><!-- End Recent Sales -->
            </div>
        </div>
    </div>
@endsection