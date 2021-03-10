<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {

        $datos['users']=User::paginate(5);
       return view('user.index',$datos );

    }


    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {

       $datosUser = request()->except('_token');
        
       User::insert($datosUser);

       return response()->json($datosUser);
    
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    
        $user = User::findOrFail($id);
        return view('user.edit', compact('user') );
    }


    public function update(Request $request, $id)
    {
        //
        $datosUser = request()->except(['_token', '_method']);
        User::where('id','=',$id)->update($datosUser);

        $user = User::findOrFail($id);
        return view('user.create', compact('user') );
    }

    public function destroy($id)
    {
        //
        User::destroy($id);
        return redirect('user');

    }
}
