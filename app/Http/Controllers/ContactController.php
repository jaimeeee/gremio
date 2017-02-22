<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Show contact form
     */
    public function form()
    {
        return view('contact', [
                        'title' => 'Contacto',
                    ]);
    }
}
