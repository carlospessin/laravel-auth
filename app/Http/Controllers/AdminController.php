<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{

    public function index()
    {
        return Inertia::render('Admin/Panel');
    }
    public function users()
    {
        $users = User::all();
        return Inertia::render('Admin/Users', ['users' => $users]);
    }
}
