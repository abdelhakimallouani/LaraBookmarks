<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use App\Models\Link;
use App\Models\Categorie;
use App\Models\tag;


class AuthController extends Controller
{
    public function showregister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect('/login');
    }

    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'your account is not active.'
            ]);
        }

    Auth::login(Auth::user());

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function dashboard()
    {
        $links = Link::all();
        $categories = Categorie::all();
        $tags = tag::all();
        return view('dashboard', compact('links', 'categories', 'tags'));
    }
}
