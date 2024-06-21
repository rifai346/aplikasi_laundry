@extends('layout.main')
@section('title','User')
@section('judul','Daftar User')
@section('isi')
@if (Session::has('create'))
@csrf
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
<a href="{{ route('user.create')}}">
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
                  <th scope="col">NAMA USER </th>
                  <th scope="col">USERNAME</th>
                  <th scope="col">PASSWORD</th> 
                  <th scope="col">ROLE </th>
                  <th scope="col">OUTLET</th>
                  <th scope="col">ACTION</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($users as $data)
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->nama }}</td>
                  <td>{{ $data->username }}</td>
                  <td>******</td>
                  <td>{{ $data->role}}</td>
                  <td>{{ $data->outlets->nama}}</td>
                  
                  <td>
                      <a href="{{ url('user/edit/'.$data->id) }}">
                          <button class="btn btn-primary">EDIT</button>
                      </a>
                      <a href="{{ url('user/destroy/'.$data->id)}}">
                        <button class="btn btn-danger">HAPUS</button>
                    </a>
                  </td>
              </tr>   
              @endforeach
          </tbody>
      </table>
  </div>
@endsection