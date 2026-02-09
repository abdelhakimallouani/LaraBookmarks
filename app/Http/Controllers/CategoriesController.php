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

    public function edit($id)
    {
        $category = Categorie::findOrFail($id);
        return view('categories.update', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Categorie::findOrFail($id);
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Categorie::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
    
}
