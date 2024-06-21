<?php

namespace App\Http\Controllers;

use App\Models\Detail_transaksi;
use App\Models\Paket;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Detail_transaksiController extends Controller
{

    public function index()
    {
        $detail_transaksi = Detail_transaksi::all();
        return view('detail_transaksi.index',['detail_transaksi'=>$detail_transaksi]);

    }

    
    public function create()
    {
        $paket = Paket::all();
        $transaksi = Transaksi::all();
        return view('detail_transaksi.create',['paket'=>$paket, 'transaksi'=>$transaksi]);

    }

    
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'transaksi_id' => 'required|unique:detail_transaksis',
            'paket_id' => 'required|unique:detail_transaksis',
            'qty' => 'required',
            'keterangan' => 'required',
        ]);

        $detail_transaksi = Detail_transaksi::create($validasi); 

        if ($detail_transaksi) {
            Session::flash('create','Data berhasil diubah');
        }

        return redirect()->route('detail_transaksi.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $detail_transaksi = Detail_transaksi::find($id);
        $detail_transaksi->delete();
        if ($detail_transaksi) {
            Session::flash('destroy','Data berhasil dihapus');
        }
        return redirect()->route('detail_transaksi.index');
    }
}
