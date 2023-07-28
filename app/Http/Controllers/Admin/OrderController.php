<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);

        $orders = $user->restaurant->orders()->with('items')->get();

        return view('admin.pages.orders.index', compact('user', 'orders'));
    }

   
    public function show(Order $order)
    {
        //
    }

}
