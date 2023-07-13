<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('dashboard', compact('user'));
    }
}
