<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LabImage;
use App\Http\Requests;

class LabController extends Controller
{
    /**
     * Show the lab page
     */
    public function index()
    {
        $images = LabImage::orderBy('created_at', 'desc')->get();
        
        return view('lab', [
                        'title' => 'Laboratorio',
                        'images' => $images,
                    ]);
    }
}
