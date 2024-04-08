<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class pageController extends Controller
{

     public function welcome() {
         $post = Post::all();
         dd($post);
            return view('welcome', [
                'title' => 'Welcome home',
                'content' => 'Lorem Ipsum'
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
