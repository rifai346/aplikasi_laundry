<?php

namespace App\Http\Controllers;
use App\Models\paket;
use App\Models\outlet;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = paket::all();
        return view('paket.index',['pakets'=>$pakets]);
    }

    public function create()
    {
        $outlets = outlet::all();
        return view('paket.create',['outlets'=>$outlets]);
    }

    public function store(Request $request)
    {
        
       $validasi = $request->validate([
            'outlet_id'  => 'required',
            'jenis'      => 'required',
            'nama_paket' => 'required',
            'harga'      => 'required',
        ]);

        $validasi['password'] = Hash::make($request->password);
        $pakets = paket::create($validasi);

        if($pakets){
            Session::flash('create','success create');
        }
        return redirect()->route('paket.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $outlets  = outlet::all();
        $pakets   = paket::find($id);
        return view('paket.edit',['paket' =>$pakets, 'outlets' =>$outlets]);
    }

    
    public function update(Request $request, $id)
    {
        $validasi = $request->validate
        ([
            'outlet_id'  => 'required',
            'jenis'      => 'required',
            'nama_paket' => 'required',
            'harga'      => 'required',
        ]);
        $pakets = paket::whereId($id)->update($validasi);
    
        if($pakets){
            Session::flash('update','success update');
        }
        return redirect()->route('paket.index');
    }
    
    public function destroy($id)
    {
        $pakets = paket::find($id);
        $pakets->delete();
  
        //redirect berfungsi untuk mengembalikan ke menu semula
        if($pakets){
            Session::flash('delete','success delete');
        }
        return redirect()->route('paket.index');
    }
}
