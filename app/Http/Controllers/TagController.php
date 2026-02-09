<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = tag::all();
        return view('tags.addtag', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        tag::create([
            'name' => $request->name,
        ]);

        return redirect()->route('tags.addtag');
    }
}
