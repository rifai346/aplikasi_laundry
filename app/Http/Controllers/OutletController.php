<?php
namespace App\Http\Controllers;
use App\Models\outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OutletController extends Controller
{
    
    public function index()
    {
        $outlet = outlet::all();
        return view('outlet.index',['outlet'=>$outlet]);
    }

    public function create()
    {
        return view('outlet.create');
    }
    
    public function store(Request $request)
    {
        $validasi = $request->validate
        ([      
            'nama'     => 'required|min:4|',
            'alamat'   => 'required',
            'telepon'  => 'required'
        ]);
        $outlet = outlet::create($validasi);
        if($outlet)
        {
            Session::flash('create','success create');
        }
        return redirect()->route('outlet.index');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $outlet = outlet::find($id);
        return view('outlet.edit',['outlet'=>$outlet]);
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate
        ([
            'nama'     => 'required|min:4|unique:outlet',
            'alamat'   => 'required',
            'telepon'  => 'required'
        ]);
        $outlet = outlet::whereId($id)->update($validasi);

        if($outlet){
            Session::flash('update','success update');
        }
        return redirect()->route('outlet.index');
    }

    public function destroy($id)
    {
        $outlet = outlet::find($id);
        $outlet->delete();
  
        //redirect berfungsi untuk mengembalikan ke menu semula
        if($outlet){
          Session::flash('delete','success delete');
      }
        return redirect()->route('outlet.index');
    }
}
