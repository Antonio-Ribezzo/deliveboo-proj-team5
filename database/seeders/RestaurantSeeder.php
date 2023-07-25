<?php

namespace Database\Seeders;

use App\Models\Admin\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Esempio di dati per i ristoranti
        $restaurants = [
            [
                'user_id' => 1, // ID dell'utente associato al ristorante (sostituire con l'ID corretto)
                'name' => 'Ristorante Pizzeria Italia',
                'address' => 'Via Roma 123',
                'p_iva' => '12345678901',
                'slug' => 'ristorante-pizzeria-italia',
                'restaurant_image' => 'restaurant_images/italian_restaurant.jpeg',
                'type_ids' => [1,8],
            ],
            [
                'user_id' => 2, // ID dell'utente associato al ristorante (sostituire con l'ID corretto)
                'name' => 'Pasta e Basta',
                'address' => 'Via Verdi 456',
                'p_iva' => '98765432109',
                'slug' => 'pasta-e-basta',
                'restaurant_image' => 'restaurant_images/pasta_restaurant.jpeg',
                'type_ids' => [1, 8],
            ],
            [
                'user_id' => 3, // ID dell'utente associato al ristorante (sostituire con l'ID corretto)
                'name' => 'Sushi Master',
                'address' => 'Via Sushi 789',
                'p_iva' => '45678901234',
                'slug' => 'sushi-master',
                'restaurant_image' => 'restaurant_images/sushi_restaurant.webp',
                'type_ids' => [2, 7],
            ],
            [
                'user_id' => 4, // ID dell'utente associato al ristorante (sostituire con l'ID corretto)
                'name' => 'Panini Express',
                'address' => 'Via Panino 567',
                'p_iva' => '56789012345',
                'slug' => 'panini-express',
                'restaurant_image' => 'restaurant_images/panini_restaurant.jpeg',
                'type_ids' => [3, 5],
            ],
        ];

        foreach ($restaurants as $restaurantData) {
            // Rimuovi il campo "type_ids" prima di utilizzare il metodo "create"
            $type_ids = $restaurantData['type_ids'];
            unset($restaurantData['type_ids']);

            $restaurant = Restaurant::create($restaurantData);

            // Associa le tipologie specifiche al ristorante
            $restaurant->types()->attach($type_ids);
        }
    }
}
