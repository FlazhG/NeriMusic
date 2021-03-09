<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $datos['users']=User::paginate(5);
       return view('user.report', $datos);

    }

    
    public function create()
    {
        return view('user.create');
    }

   
    public function store(Request $request)
    {
       $datosUser = request()->except('_token');
        
       User::insert($datosUser);
    
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
