<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
       $user = User::paginate();
       
       return view('user.report', compact('user'));

    }

    
    public function create()
    {
       return view('user.create');
    }

   
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->lastname_usu = $request->lastname_usu;
        $user->date_usu = $request->date_usu;
        $user->sexo_usu = $request->sexo_usu;
        $user->phone_usu = $request->phone_usu;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->terms_usu = $request->terms_usu;
       
        $user->save();
        return redirect()->route('user.report', $user);
    
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
        //
    }
}
