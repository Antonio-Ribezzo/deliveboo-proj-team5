<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $restaurants = Restaurant::all();

        $users = User::all();

        return view('admin.pages.Restaurant.create', compact('restaurants', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $request->all();
        $slug = Restaurant::generateSlug($request->name);
        $form_data['slug'] = $slug;

        $newRestaurant = new Restaurant();
        $newRestaurant->fill($form_data);
        $newRestaurant->user_id = auth()->user()->id;
        $newRestaurant->save();

        $logged_user = User::find(auth()->user()->id);
        $logged_user->restaurant_id = $newRestaurant->id;
        $logged_user->save();
        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
