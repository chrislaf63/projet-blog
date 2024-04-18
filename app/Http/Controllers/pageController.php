<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class pageController extends Controller
{

    public function welcome()
    {
        $post = Post::latest()->get();
        return view('welcome', compact('post'), mergeData: [
            'title' => 'Welcome Home',
        ]);
    }

    public function legals()
    {

        $items = array(
            'Bonjour',
            'Laravel',
            'Tu',
            'nous',
            'fais',
            'bien',
            'galerer'
        );

        return view('legals', [
            'title' => 'Legals',
            'content' => 'Lorem Ipsum',
            'items' => $items
        ]);
    }


    public function blog(Request $request)
    {
       dd($request->all());
        $post = Post::latest()->get();
        return view('blog', compact('post'), [
            'title' => 'blog',
            'categories' => Categorie::select('id', 'categorie')->get()
        ]);
    }

//    public function sort(Request $request)
//    {
//            $post = Post::whereHas('categories', function($q){
//                $q->where('id', '=', $request->category()->id)
//            });
//    }

}


