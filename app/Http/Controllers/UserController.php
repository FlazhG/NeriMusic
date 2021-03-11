<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $datos['users']=User::paginate(10);
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

       return redirect('user');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'))->with('user',$user);
    }


    public function update(Request $request, $id)
    {
        //
        $datosUser = request()->except(['_token', '_method']);
        User::where('id','=',$id)->update($datosUser);

        $user = User::findOrFail($id);
        return view('user.create', compact('user') );
    }

    public function desactivar($id)
   {
     $user = User::find($id);
     $user->delete();
     return view('user.index');
   }

   public function activar($id)
   {
     $user = User::withTrashed()->where('id',$id)->restore();
     return view('user.index');
   }

    public function destroy($id)
    {
        //
        User::find($id)->forceDelete();
        return redirect('user');

    }
}
