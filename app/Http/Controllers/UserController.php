<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function tampil(){
        $user = User::get();
        return view('user.tampil' , compact('user'));
    }

    function tambah(){
        return view('user.tambah');
    }

    function submit(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'role' => 'required|in:admin,user',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role, 
        ]);
    
        return redirect()->route('user.tampil')->with('success', 'Berhasil menambahkan akun! ');
    }

    function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

        $user = User::findOrFail($id);

        if ($request->password){
            $user->password = Hash::make($request->password);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('user.tampil')->with('success', 'Akun berhasil di update');
    }

    function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.tampil');
    }


}

