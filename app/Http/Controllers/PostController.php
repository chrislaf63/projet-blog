<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Auth::id();
        $posts = Post::where('user_id', $id)->get();
        return view('myposts', compact ('posts'), [
            'title' => 'Mes posts'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
            'user_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->user_id = $request->user_id;
        if($request->hasFile('image')) {
            $photoName = time().'.'.$request->image->extension();
            $request->image->move(public_path('photos'), $photoName);
            $post->image = $photoName;
        }
        $post->save();
        $post->category()->attach($request->categories);

        return redirect()->route('myposts')
            ->with('success','Post created successfully.');
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        return view('create', [
            'title' => 'Nouveau Post',
            'user_id' => $id,
            'categories' => Categorie::select('id', 'categorie')->get()
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'content' => 'required',
        ]);
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        if($request->hasFile('image')) {
            $photoName = time().'.'.$request->image->extension();
            $request->image->move(public_path('photos'), $photoName);
            $post->image = $photoName;
        }

        $post->update();

//        $post->update($request->all()); //after update get $post and sync()
//        $post->category()->sync($request->categories);

//        $post->update([
//            "title" => $request->title,
//            "description" => $request->description,
//            "content" => $request->content,
//        ]);

        return redirect()->route('myposts')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('myposts')
            ->with('success', 'Post deleted successfully');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $idCategories = array_column($post->category->all(), 'id');
        return view('edit', compact('post'), [
            'title' => 'Modifier un post',
            'categories' => Categorie::select('id', 'categorie')->get(),
            'idCategories' => $idCategories,
         ]);
    }
}
