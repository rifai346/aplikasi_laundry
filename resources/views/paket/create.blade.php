@extends('layout.main')
@section('title','Input Paket')
@section('judul','Form Input Paket')
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
    <form action="{{ route('paket.store')}}" method="post">
        @csrf
        <div class="form-group mb-2">
            <label class="form-label">OUTLET</label>
            <select class="form-control" name="outlet_id">
            <option value="">--Pilih Outlet--</option>
            @foreach ($outlets as $data)
            <option value="{{ $data->id}}">{{ $data->nama }}</option>    
            @endforeach
            </select>
        </div>
        
        <div class="form-group mb-2">
                    <label for="validationCustom01" class="form-label">Jenis Paket</label>
                    <select value=" {{ old('jenis')}}" class="form-control " name="jenis">
                    <option value="">--Pilih Paket--</option>
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed Cover</option>
                    <option value="kaos">Kaos</option>
                    <option value="dll">Dll</option>
                    </select>
                    <div class="valid-feedback">
                            Looks good!
                </div>
            </div>
        <div class="form-group mb-2">
            <label class="form-label">Nama Paket</label>
            <input value="{{ old('nama_paket')}}" name="nama_paket" type="text" class="form-control">
          </div>
          <div class="form-group mb-2">
              <label>Harga</label>
              <input value="{{ old('harga')}}" name="harga" type="text" class="form-control">  
            </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
@endsection                             