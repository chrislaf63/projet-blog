<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class pageController extends Controller
{

     public function welcome() {
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
