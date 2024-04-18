<?php

namespace App\Http\Controllers;


use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Categorie::get();
        return view('category', compact('category'), [
            'title' => 'Catégories',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'categorie' => 'required',
        ]);
        Categorie::create($request->all());
        return redirect()->route('newcat')
            ->with('success','Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Categorie::find($id);
        $cat->delete();
        return redirect()->route('category')
            ->with('success', 'Post deleted successfully');
    }

    public function edit($id)
    {
        $cat = Categorie::find($id);
        return view('editCategory', compact('cat'), [
            'title' => 'Modifier une categorie'
        ]);
    }

/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'categorie' => 'required',
        ]);
        $cat = Categorie::find($id);
        $cat->update($request->all());
        return redirect()->route('category')
            ->with('success', 'Post updated successfully.');
    }
}
