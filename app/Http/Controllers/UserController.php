<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|min:3|max:10',
           'username' =>'required',
           'email' => 'required|email|unique:users',
           'password' => 'required'
        ]);
        User::create($request->only('name', 'username', 'email')
            +[
            'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        //$user = User::findOrFail($id);
        // dd($user);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //$user=User::findOrFail($id);
        $data = $request->only('name','username','email');
        $password=$request->input('password');
        if($password)
            $data['password']= bcrypt($password);
        /*
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }*/
        $user->update($data);
        return redirect()->route('users.index')->with('success','Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success','Usuario eliminado correctamente');
    }
}
