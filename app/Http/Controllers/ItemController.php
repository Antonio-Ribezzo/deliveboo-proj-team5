<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Admin\Restaurant;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::find(auth()->user()->id);

        $items = $user->restaurant->items;

        return view('admin.pages.Items.index', compact('user', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $items = Item::all();

        return view('admin.pages.Items.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $form_data = $request->all();

        $available = ($_POST['available'] == 'true') ? 1 : 0;

        if ($request->hasFile('cover_image')) {

            $path = Storage::disk('public')->put('item_images', $request->cover_image);

            $form_data['cover_image'] = $path;
        }

        $newItem = new Item();
        $newItem->fill($form_data);
        $newItem->available = $available;

        $newItem->save();

        $logged_restaurant = Restaurant::where('user_id', Auth::id())->first();
        $logged_restaurant->items()->save($newItem);

        return redirect()->route('admin.items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // Trova l'item corrispondente all'ID richiesto e al ristorante dell'utente autenticato
        $item = User::find(auth()->user()->id)
                    ->restaurant
                    ->items
                    ->find($request->route()->item);

        // Se l'item non esiste o non fa parte dello user autenticato, restituisci 401 Unauthorized
        if (!$item) {
            abort(401, 'Unauthorized');
        }

        return view('admin.pages.Items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item, Request $request)
    {
        // Trova l'item corrispondente all'ID richiesto e al ristorantedell'utente autenticato
        $item = User::find(auth()->user()->id)
        ->restaurant
        ->items
        ->find($request->route()->item);

        // Se l'item non esiste o non fa parte dello user autenticato, restituisci 401      Unauthorized
        if (!$item) {
            abort(401, 'Unauthorized');
    }

        return view('admin.pages.Items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $form_data = $request->all();

        $available = ($form_data['available'] == 'true') ? 1 : 0;

        $form_data['available'] = $available;

        if ($request->hasFile('cover_image')) {


            if ($item->cover_image) {
                Storage::delete($item->cover_image);
            }
            //Genere un path di dove verrà salvata l'immagine nel progetto
            $path = Storage::disk('public')->put('item_images', $request->cover_image);

            $form_data['cover_image'] = $path;
        }

        // dd($form_data);
        $item->update($form_data);

        $logged_restaurant = Restaurant::where('user_id', Auth::id())->first();
        $logged_restaurant->items()->save($item);

        return redirect()->route('admin.items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.items.index');
    }
}
