<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Banner;

class HomeController extends Controller
{
    /**
     * Show the site's home
     */
    public function home()
    {
        $banners = Banner::orderBy('created_at', 'desc')->get();
        
        return view('home', [
                        'banners' => $banners,
                    ]);
    }
}
