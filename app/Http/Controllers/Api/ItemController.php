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
        $query = Item::with(['restaurants']);

        if($request->has('restaurant_id')){

            $restaurant_id = explode(',', $request->restaurant_id);

            $query->whereHas('restaurant', function($query)use($restaurant_id){
                $query->whereIn('id', $restaurant_id);
            });
        }

        $items = $query->get();

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