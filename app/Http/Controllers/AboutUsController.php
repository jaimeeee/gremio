<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('about-us', [
                        'title' => 'Somos Gremio',
                    ]);
    }
    
    public function how()
    {
        return view('about-us-how', [
                        'title' => '¿Cómo lo hacemos?',
                    ]);
    }
    
    public function where()
    {
        return view('about-us-where', [
                        'title' => '¿Dónde lo hacemos?',
                    ]);
    }
}
