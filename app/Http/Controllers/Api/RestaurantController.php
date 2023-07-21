<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();

        return response()->json([
            'success'=> true,
            'restaurants'=>$restaurants
        ]);
    }
}
