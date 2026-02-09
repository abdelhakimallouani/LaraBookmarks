<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::with('categorie')->get();
        $categories = Categorie::all();
        return view('links.showlink', compact('categories', 'links'));
    }

    public function create()
    {
        $categories = Categorie::all();

        return view('links.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            ]);

        Link::create([
            'titre' => $request->titre,
            'url' => $request->url,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('links.index');
    }
}
