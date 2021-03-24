<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $datos['users'] = User::all();
        $consulta['users'] = User::withTrashed()->get();
       return view('user.index')->with($datos)->with($consulta);

    }


    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {

       $datosUser = request()->except('_token');
       if ($request->hasFile('img_user')) {
         $datosUser['img_user']=$request->file('img_user')->store('img/user','public');
       }
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
        if ($request->hasFile('img_user')) {
          $user = User::findOrFail($id);
          Storage::delete('public/'.$user->img_user);
          $datosUser['img_user']=$request->file('img_user')->store('img/user','public');
        }
        User::where('id','=',$id)->update($datosUser);
        $user = User::findOrFail($id);
        $datos['users'] = User::all();
        $consulta['users'] = User::withTrashed()->get();
        return view('user.index', compact('user'))->with($datos)->with($consulta);
    }

    public function desactivar($id)
   {
     $user = User::find($id);
     $user->delete();
     return redirect('user');
   }

   public function activar($id)
   {
     $user = User::withTrashed()->where('id',$id)->restore();
     return redirect('user');
   }

    public function destroy($id)
    {
      $user = User::findOrFail($id);
      if (Storage::delete('public/'.$user->img_user)) {
        User::find($id)->forceDelete();
      }
        return redirect('user');

    }
}
