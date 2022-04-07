<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/Login');
    }
    public function me()
    {
        return Inertia::render('Home/Me');
    }
    public function register()
    {
        return Inertia::render('Auth/Register');
    }
}
