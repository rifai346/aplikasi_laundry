@extends('layout.main')
@section('title','Input Detail Transaksi')
@section('judul','Input Detail Transaksi')
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

<form action="{{ route('detail_transaksi.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode Invoice</label>
            <select class="form-control" name="transaksi_id" require>
                <option value="">-- Pilih Kode --</option>
                @foreach ( $transaksi as $data )
                    <option value="{{ $data->id}}">{{ $data->kode_invoice }}</option>
                @endforeach
            </select>
        </div>  

        <div class="form-group">
            <label>Nama Paket</label>
            <select class="form-control" name="paket_id" require>
                <option value="">-- Pilih Paket --</option>
                @foreach ( $paket as $data )
                    <option value="{{ $data->id}}">{{ $data->nama_paket }}</option>
                @endforeach
            </select>
        </div>  

        <div class="form-group">
            <label>Qty</label>
            <input type="text" class="form-control" name="qty" required>
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" required>
        </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
@endsection