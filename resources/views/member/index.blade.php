@extends('layout.main')
@section('title','Member')
@section('judul','Daftar Member')
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

<a href="{{ route('member.create')}}">
    <button class="btn btn-icon btn-3 btn-danger" type="button">
        <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
      <span class="btn-inner--text">Tambah Data</span>
    </button>
</a>
  <div class="table-responsive">
      <table class="table table-striped table-sm">
          <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Member</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">--Action--</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($member as $data)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->jenis_kelamin }}</td>
                  <td>{{ $data->telepon }}</td>
                  <td>
                      <a href="{{ url('member/edit/'.$data->id) }}">
                          <button class="btn btn-primary">EDIT</button>
                      </a>
                      <a href="{{ url('member/destroy/'.$data->id) }}">
                        <button class="btn btn-danger">HAPUS</button>
                    </a>
                  </td>
              </tr>   
              @endforeach
          </tbody>
      </table>
  </div>
@endsection