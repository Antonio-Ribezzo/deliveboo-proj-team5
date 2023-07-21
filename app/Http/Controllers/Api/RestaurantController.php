<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Restaurant;

class RestaurantController extends Controller
{
    public function index(Request $request){

        $query = Restaurant::with(['types']); 

        if($request->has('type_id')){
            // con explode da 2,4,5 diventa [2,4,5]
            $type_id = explode(',', $request->type_id);

            // type_id =[2,4,5]

            // il primo parametro whereHas è il nome del metodo di relazione tra le tabelle restaurants e types scritta nel model restaurant.php
            $query->whereHas('types', function($query)use($type_id){
                $query->whereIn('id', $type_id);
            });
        }

        $restaurants = $query->get();

        return response()->json([
            'success'=> true,
            'restaurants'=>$restaurants
        ]);
    }

    public function show($slug)
    {
        $restaurant = Restaurant::with('types')->where('slug', $slug)->first();

        if ($restaurant) {
            return response()->json([
                'success' => true,
                'restaurant' => $restaurant
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'non ci sono ristoranti'
            ]);
        }
    }
}
