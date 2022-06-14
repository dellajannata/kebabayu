<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact1(){
            return view('layouts.contact')
                    ->with('title', 'Kontak Kami');
        }
}