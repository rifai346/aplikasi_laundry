<?php
namespace App\Http\Controllers;
use App\Models\users;
use App\Models\outlet;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = users::all();
        return view('user.index',['users'=>$users]);
    }

    public function create()
    {
        $outlets = outlet::all();
        return view('user.create',['outlets'=>$outlets]);
    }

    public function store(Request $request)
    {
        
       $validasi = $request->validate([
            'nama'      => 'required',
            'username'  => 'required|min:3|unique:users',
            'password'  => 'required|min:3',
            'role'      => 'required',
            'outlet_id' => 'required'
            
        ]);

        $validasi['password'] = Hash::make($request->password);
        $users = users::create($validasi);

        if($users){
            Session::flash('create','success create');
        }
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $outlets  = outlet::all();
        $users   = users::find($id);
        return view('user.edit',['user' =>$users, 'outlets' =>$outlets]);
    }

    
    public function update(Request $request, $id)
    {
        $validasi = $request->validate
        ([
            'nama'      => 'required',
            'username'  => 'required|min:3',
            'password'  => 'required|min:3',
            'role'      => 'required',
            'outlet_id' => 'required',
            
        ]);
        $validasi['password'] = Hash::make($request->password);
        $users = users::whereId($id)->update($validasi);
    
        if($users){
            Session::flash('update','success update');
        }
        return redirect()->route('user.index');
    }

    
    public function destroy($id)
    {
        $users = users::find($id);
        $users->delete();
  
        //redirect berfungsi untuk mengembalikan ke menu semula
        if($users){
            Session::flash('delete','success delete');
        }
        return redirect()->route('user.index');
    }
}
