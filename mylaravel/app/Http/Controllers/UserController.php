<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function login_action(Request $req){
        $user = User::where('email', $req->username)->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return redirect('/login');
        }
        session(['userdata' => $user]);
        return redirect('/users');
    }

    public function logout(){
        session()->forget('userdata');
        session()->flush();
        return redirect('/');
    }

    public function register(){
        return view('register');
    }

    public function register_action(Request $req){
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);
        return redirect('/users');
    }

    public  function show_user(){
        $users = User::all();
        return view('showuser', ['users' => $users]);
    }

    public function update_user($id){
        $user = User::find($id);
        return view('edituser', ['user' => $user]);
    }

    public  function update_user_action(Request $req){
        User::where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => isset($req->password) ? $req->password : "",
        ]);
        return redirect('/users');
    }

    public function delete_user(Request $req){
        return redirect('/users');
    }
}
