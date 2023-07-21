<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('restaurant_id')) {
            $restaurant_id = $request->input('restaurant_id');
            $items = Item::where('restaurant_id', $restaurant_id)->get();
        } else {
            $items = Item::all();
        }

        return response()->json([
            "success" => true,
            "items" => $items,
        ]);
    }

    public function show(Item $item)
    {
        //
    }

}