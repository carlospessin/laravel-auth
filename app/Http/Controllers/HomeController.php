<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $role = Auth::user()->role;

            if ($role == 'user') {
                return Redirect::route('dashboard');
            } else if ($role == 'admin') {
                return Redirect::route('admin.panel');
            } else {
                return redirect()->back();
            }
        }

    }

}
