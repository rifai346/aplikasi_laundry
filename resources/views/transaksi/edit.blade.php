@extends('layout.main')
@section('title','Input Transaksi')
@section('judul','Input Transaksi')
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

<form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode Invoice</label>
            <input value="{{ $transaksi->kode_invoice }}" type="text" class="form-control" name="kode_invoice" required>
        </div>
        <div class="form-group">
            <label>Nama Outlet</label>
            <select class="form-control" name="outlet_id" require>
                <option value="{{ $transaksi->outlet_id }}">
                    {{ $transaksi->outlet->nama_outlet }}
                </option>
                @foreach ( $outlet as $data )
                    <option value="{{ $data->id}}">{{ $data->nama_outlet }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Member</label>
            <select class="form-control" name="member_id" require>
                <option value="{{ $transaksi->member_id }}">
                    {{ $transaksi->member->nama_member }}
                </option>
                @foreach ( $member as $data )
                    <option value="{{ $data->id}}">{{ $data->nama_member }}</option>
                @endforeach
            </select>
        </div>        
        <div class="form-group">
            <label>Nama User</label>
            <select class="form-control" name="user_id" require>
                <option value="{{ $transaksi->user_id }}">
                    {{ $transaksi->user->nama_user }}
                </option>
                @foreach ( $user as $data )
                    <option value="{{ $data->id}}">{{ $data->nama_user }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input value="{{ $transaksi->tgl }}" type="date" class="form-control" name="tgl" required>
        </div>

        <div class="form-group">
            <label>Batas Waktu</label>
            <input value="{{ $transaksi->batas_waktu }}" type="date" class="form-control" name="batas_waktu" required>
        </div>

        <div class="form-group">
            <label>Tanggal Bayar</label>
            <input value="{{ $transaksi->tgl_bayar }}" type="date" class="form-control" name="tgl_bayar" required>
        </div>

        <div class="form-group">
            <label>Biaya Tambahan</label>
            <input value="{{ $transaksi->biaya_tambahan }}" type="text" class="form-control" name="biaya_tambahan" required>
        </div>

        <div class="form-group">
            <label>Diskon</label>
            <input value="{{ $transaksi->diskon }}" type="double" class="form-control" name="diskon" required>
        </div>

        <div class="form-group">
            <label>Pajak</label>
            <input value="{{ $transaksi->pajak }}" type="double" class="form-control" name="pajak" required>
        </div>

        <div class="form-group">
            <label>Status Laundry</label>
            <select class="form-control" name="status" require>
                <option value="{{ $transaksi->status }}">{{ $transaksi->status }}</option>
                <option value="baru">Baru</option>
                <option value="proses">Proses</option>
                <option value="selesai">Selesai</option>
                <option value="diambil">Diambil</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Status Bayar</label>
            <select class="form-control" name="dibayar" require>
                <option value="{{ $transaksi->dibayar }}">{{ $transaksi->dibayar }}</option>                
                <option value="dibayar">Dibayar</option>
                <option value="belum_dibayar">Belum Dibayar</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
@endsection