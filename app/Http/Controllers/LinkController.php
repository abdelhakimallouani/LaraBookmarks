<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Link;
use App\Models\tag;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::with('categorie', 'tags')->get();
        $categories = Categorie::all();

        return view('links.showlink', compact('categories', 'links'));
    }

    public function create()
    {
        $categories = Categorie::all();
        $tags = tag::all();

        return view('links.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'tags' => 'array|nullable',
            'tags.*' => 'exists:tags,id',
        ]);

        $link = Link::create([
            'titre' => $request->titre,
            'url' => $request->url,
            'categorie_id' => $request->categorie_id,
        ]);

        if ($request->tags) {
            $link->tags()->attach($request->tags);
        }

        return redirect()->route('links.index');
    }

    public function edit($id)
    {
        $link = Link::findOrFail($id);
        $categories = Categorie::all();

        return view('links.update', compact('link', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'url' => 'required|url|max:255',
        ]);

        $link = Link::findOrFail($id);
        $link->update([
            'titre' => $request->titre,
            'url' => $request->url,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->route('links.index');
    }

    public function delete($id)
    {
        $link = Link::findOrFail($id);
        $link->delete();

        return redirect()->route('links.index');
    }
}
