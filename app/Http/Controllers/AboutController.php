<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about1(){
            return view('layouts.about')
                    ->with('title', 'Tentang Kami');
        }
}