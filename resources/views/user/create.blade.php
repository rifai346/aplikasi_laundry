@extends('layout.main')
@section('title','Input User')
@section('judul','Form Input User')
@section('isi')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('user.store')}}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label>Nama User</label>
            <input value="{{ old('nama')}}" name="nama" type="text"  class="form-control">
        </div>
        <div class="form-group mb-2">
            <label class="form-label">Username</label>
            <input value="{{ old('username')}}" name="username" type="text" class="form-control">
          </div>
          <div class="form-group mb-2">
              <label>Password</label>
              <input value="{{ old('passowrd')}}" name="password" type="password" class="form-control">  
            </div>
            <div class="form-group mb-2">
                    <label for="validationCustom01" class="form-label">Role</label>
                    <select value=" {{ old('role')}}" class="form-control " name="role">
                    <option value="">--Pilih Role--</option>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option>
                    </select>
                    
            </div>
        <div class="form-group mb-2">
            <label class="form-label">Outlet</label>
            <select class="form-control" name="outlet_id">
            <option value="">--Pilih Outlet--</option>
            @foreach ($outlets as $data)
            <option value="{{ $data->id}}">{{ $data->nama }}</option>    
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection                             