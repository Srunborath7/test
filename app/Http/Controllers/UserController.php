<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from MongoDB
        return view('admin.home_page', compact('users'));
    }
    public function authLogin(Request $req){
       $req->validate([
            "email" => "required|email",
            "password" => "required|string|min:6"
        ]);
        $user = User::where("email", $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Invalid email or password'
            ])->withInput();
        }

         return redirect('/')->with('success', 'Login successful');
    }
}
