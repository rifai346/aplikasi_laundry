@extends('layout.main')
@section('title','Paket')
@section('judul','Daftar Paket')
@section('isi')
@if (Session::has('create'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Di Tambah</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (Session::has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Di Hapus!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if (Session::has('update'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data Berhasil Di Edit!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<a href="{{ route('paket.create')}}">
  <button class="btn btn-icon btn-3 btn-danger" type="button">
      <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
    <span class="btn-inner--text">Tambah Data</span>
  </button>
</a>
  <div class="table-responsive">
      <table class="table table-striped table-sm">
          <thead>
              <tr>
                  <th scope="col">NO</th>
                  <th scope="col">OUTLET</th>
                  <th scope="col">JENIS</th>
                  <th scope="col">NAMA PAKET</th>
                  <th scope="col">HARGA</th>
                  <th scope="col">--ACTION--</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($pakets as $data)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->outlets->nama }}</td>
                  <td>{{ $data->jenis }}</td>
                  <td>{{ $data->nama_paket }}</td>
                  <td>{{ $data->harga }}</td>
                  <td>
                      <a href="{{ url('paket/edit/'.$data->id) }}">
                          <button class="btn btn-primary">EDIT</button>
                      </a>
                      <a href="{{ url('paket/destroy/'.$data->id)}}">
                        <button class="btn btn-danger">HAPUS</button>
                    </a>
                  </td>
              </tr>   
              @endforeach
          </tbody>
      </table>
  </div>
@endsection