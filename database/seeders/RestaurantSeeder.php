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
                'user_id' => 1,
                'name' => 'Ristorante Pizzeria Italia',
                'address' => 'Via Roma 123',
                'p_iva' => '12345678901',
                'slug' => 'ristorante-pizzeria-italia',
                'restaurant_image' => 'restaurant_images/italian_restaurant.jpeg',
                'type_ids' => [1, 8],
            ],
            [
                'user_id' => 2,
                'name' => 'Pasta e Basta',
                'address' => 'Via Verdi 456',
                'p_iva' => '98765432109',
                'slug' => 'pasta-e-basta',
                'restaurant_image' => 'restaurant_images/pasta_restaurant.jpeg',
                'type_ids' => [1, 8],
            ],
            [
                'user_id' => 3,
                'name' => 'Sushi Master',
                'address' => 'Via Sushi 789',
                'p_iva' => '45678901234',
                'slug' => 'sushi-master',
                'restaurant_image' => 'restaurant_images/sushi_restaurant.webp',
                'type_ids' => [2, 7],
            ],
            [
                'user_id' => 4,
                'name' => 'Panini Express',
                'address' => 'Via Panino 567',
                'p_iva' => '56789012345',
                'slug' => 'panini-express',
                'restaurant_image' => 'restaurant_images/panini_restaurant.jpeg',
                'type_ids' => [3, 5],
            ],
            [
                'user_id' => 5,
                'name' => 'Morning Brew Cafe',
                'address' => 'Via Coffee 345',
                'p_iva' => '63541908726',
                'slug' => 'morning-brew-cafe',
                'restaurant_image' => 'restaurant_images/coffee_cafe.jpeg',
                'type_ids' => [6],
            ],
            [
                'user_id' => 6,
                'name' => 'Sweet Delights Bakery',
                'address' => 'Via Sugar 456',
                'p_iva' => '72635481907',
                'slug' => 'sweet-delights-bakery',
                'restaurant_image' => 'restaurant_images/sweets_bakery.jpeg',
                'type_ids' => [4],
            ],
            [
                'user_id' => 7,
                'name' => 'Kebab Land',
                'address' => 'Via Kebab 876',
                'p_iva' => '26354190872',
                'slug' => 'kebab-land',
                'restaurant_image' => 'restaurant_images/kebab_restaurant.jpeg',
                'type_ids' => [3],
            ],
            [
                'user_id' => 8,
                'name' => 'Gelato Paradise',
                'address' => 'Via Gelato 234',
                'p_iva' => '19872635401',
                'slug' => 'gelato-paradise',
                'restaurant_image' => 'restaurant_images/ice_cream_shop.jpeg',
                'type_ids' => [4],
            ],
            [
                'user_id' => 9,
                'name' => 'Burger House',
                'address' => 'Via Burger 345',
                'p_iva' => '63541908726',
                'slug' => 'burger-house',
                'restaurant_image' => 'restaurant_images/burger_restaurant.jpeg',
                'type_ids' => [5],
            ],
            [
                'user_id' => 10,
                'name' => 'Sunrise Breakfast Cafe',
                'address' => 'Via Colazione 567',
                'p_iva' => '19283746501',
                'slug' => 'sunrise-breakfast-cafe',
                'restaurant_image' => 'restaurant_images/breakfast_cafe.jpeg',
                'type_ids' => [6],
            ],
            [
                'user_id' => 11,
                'name' => 'Tokyo Sushi Bar',
                'address' => 'Via Tokyo 789',
                'p_iva' => '90756431238',
                'slug' => 'tokyo-sushi-bar',
                'restaurant_image' => 'restaurant_images/sushi_bar.jpeg',
                'type_ids' => [7],
            ],
            [
                'user_id' => 12,
                'name' => 'Trattoria Buona Italia',
                'address' => 'Via Italia 890',
                'p_iva' => '10928374657',
                'slug' => 'trattoria-buona-italia',
                'restaurant_image' => 'restaurant_images/italian_trattoria.jpeg',
                'type_ids' => [1,8],
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
