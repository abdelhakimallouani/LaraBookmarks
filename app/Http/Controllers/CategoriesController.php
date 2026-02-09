<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie; 
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categorie::where('user_id', Auth::id())->get();
        return view('categories.showcategorie', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Categorie::create([
            'name' => $request->name,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('categories.index');
    }
    
}
