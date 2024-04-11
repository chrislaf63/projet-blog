<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class pageController extends Controller
{

     public function welcome() {
         $post = Post::latest()->get();
            return view('welcome' , compact('post'), mergeData: [
                'title' => 'Welcome Home',
            ]);
            }

    public function legals() {

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
}
