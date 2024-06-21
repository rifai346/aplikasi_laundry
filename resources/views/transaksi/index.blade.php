@extends('layout.main')
@section('title','Transaksi')
@section('judul','Transaksi')
@section('isi')
@if (Session()->has('create'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil Ditambah!</strong>Data anda berhasil ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (Session()->has('update'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Berhasil Diubah!</strong>Data anda berhasil diubah
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (Session()->has('destroy'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Berhasil Dihapus!</strong>Data anda berhasil dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="table-responsive">
    <a href="{{ route('transaksi.create') }}">
        <button class="btn btn-danger">Tambah Data</button>
    </a>
        <table class="table table-striped table-sm" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Invoice</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Member</th>
                    <th scope="col">User </th>
                    <th scope="col">Tanggal </th>
                    <th scope="col">Batas Waktu </th>
                    <th scope="col">Tanggal Bayar </th>
                    <th scope="col">Biaya Tambahan </th>
                    <th scope="col">Diskon </th>
                    <th scope="col">Pajak </th>
                    <th scope="col">Status Laundry </th>
                    <th scope="col">Status Bayar </th>
                    <th scope="col"> --Action-- </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kode_invoice }}</td>
                    <td>{{ $data->outlets->nama }}</td>
                    <td>{{ $data->members->nama }}</td>
                    <td>{{ $data->users->nama }}</td>
                    <td>{{ $data->tgl }}</td>
                    <td>{{ $data->batas_waktu }}</td>
                    <td>{{ $data->tgl_bayar }}</td>
                    <td>{{ $data->biaya_tambahan }}</td>
                    <td>{{ $data->diskon }}</td>
                    <td>{{ $data->pajak }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->dibayar }}</td>

                    <td>
                    <a href="{{ url('transaksi/edit/'.$data->id) }}">
                          <button class="btn btn-primary">EDIT</button>
                      </a>
                      <a href="{{ url('transaksi/destroy/'.$data->id)}}">
                        <button class="btn btn-danger">HAPUS</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection