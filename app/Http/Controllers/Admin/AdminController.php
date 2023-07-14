<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        $restaurant = $user->restaurant;

        return view('dashboard', compact('user', 'restaurant'));
    }
}
