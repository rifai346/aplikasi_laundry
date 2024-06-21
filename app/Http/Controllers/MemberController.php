<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\member;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    
    public function index()
    {
        $member = member::all();
        return view('member.index',['member'=>$member]);
    }

    public function create()
    {
        return view('member.create');

    }

    public function store(Request $request)
    {
        
       $validasi = $request->validate
        ([      
            'nama'            => 'required|min:3|unique:members',
            'alamat'          => 'required',
            'jenis_kelamin'   => 'required',
            'telepon'         => 'required'
        ]);
            
        $member = member::create($validasi);
        if($member)
        {
            Session::flash('create','success create');
        }
        return redirect()->route('member.index');
        
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $member = member::find($id);
        return view('member.edit',['member'=>$member]);
    }

    public function update(Request $request, $member)
    {
        // dd($masakan);
        $validasi = $request->validate
        ([
            'nama'          => 'required',
            'alamat'        => 'required',
            'jenis_kelamin' => 'required',
            'telepon'       => 'required',
        ]);
        $member = member::whereId($member)->update($validasi);

        if($member){
            Session::flash('update','success update');
        }
        return redirect()->route('member.index');
    }

    public function destroy($id)
    {
      $member = member::find($id);
      $member->delete();

      //redirect berfungsi untuk mengembalikan ke menu semula
      if($member){
        Session::flash('delete','success delete');
    }
      return redirect()->route('member.index');
    }
}
