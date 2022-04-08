<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        // Regenerate SSO
        $user = Auth::user();
        $user->auth_ticket = Str::random(60);
        $user->save();

        return Inertia::render('Client');
    }

}
