@extends('layout.main')
@section('title','Detail Transaksi')
@section('judul','Detail Transaksi')
@section('isi')

<div class="table-responsive">
    <a href="{{ route('detail_transaksi.create') }}">
        <button class="btn btn-warning">Tambah Data</button>
    </a>
        <table class="table table-striped table-sm" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Invoice</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Keterangan </th>
                    <th scope="col"> --Action-- </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detail_transaksi as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->transaksis->kode_invoice }}</td>
                    <td>{{ $data->pakets->nama_paket }}</td>
                    <td>{{ $data->qty }}</td>
                    <td>{{ $data->keterangan }}</td>
                
                    <td>
                        <a href="{{ url('detail_transaksi/edit/'.$data->id) }}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{ url('detail_transaksi/destroy/'.$data->id) }}">
                            <button class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection