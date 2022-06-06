<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function api()
    {
        return Inertia::render('API');
    }
    public function andra()
    {
        return Inertia::render('Andra');
    }
}
