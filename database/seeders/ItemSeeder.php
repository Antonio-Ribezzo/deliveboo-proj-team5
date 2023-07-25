<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizze = [
            [
                'restaurant_id' => 1, // ID del ristorante a cui associare la pizza
                'name' => 'Pizza Margherita',
                'ingredients' => 'Tomato, mozzarella, basil',
                'price' => 8.99,
                'cover_image' => 'item_images/pizza_margherita.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Pizza Napoli',
                'ingredients' => 'Tomato, mozzarella, anchovies, olives, capers',
                'price' => 9.50,
                'cover_image' => 'item_images/pizza_napoli.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Pizza Quattro Formaggi',
                'ingredients' => 'Mozzarella, gorgonzola, fontina, parmesan',
                'price' => 10.99,
                'cover_image' => 'item_images/pizza_quattro_formaggi.webp',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Veggie Pizza',
                'ingredients' => 'Tomato, mozzarella, bell peppers, olives',
                'price' => 10.99,
                'cover_image' => 'item_images/veggie_pizza.jpeg',
                'available' => true,
            ]
        ];

        $pastaDishes = [
            [
                'restaurant_id' => 2, // ID del ristorante a cui associare il piatto di pasta
                'name' => 'Spaghetti Carbonara',
                'ingredients' => 'Pasta, eggs, pancetta, cheese',
                'price' => 12.50,
                'cover_image' => 'item_images/spaghetti_carbonara.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Penne alla Bolognese',
                'ingredients' => 'Pasta, minced meat, tomato sauce, herbs',
                'price' => 10.99,
                'cover_image' => 'item_images/penne_bolognese.webp',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Lasagna al Forno',
                'ingredients' => 'Pasta, Bolognese sauce, bechamel, cheese',
                'price' => 14.75,
                'cover_image' => 'item_images/lasagna_al_forno.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Penne Alfredo',
                'ingredients' => 'Pasta, creamy Alfredo sauce',
                'price' => 11.50,
                'cover_image' => 'item_images/penne_alfredo.webp',
                'available' => false,
            ]
        ];

        $sushiItems = [
            [
                'restaurant_id' => 3, // ID del ristorante a cui associare il piatto di sushi
                'name' => 'Sashimi Mix',
                'ingredients' => 'Assorted fresh raw fish',
                'price' => 18.99,
                'cover_image' => 'item_images/sashimi_mix.avif',
                'available' => true,
            ],
            [
                'restaurant_id' => 3,
                'name' => 'California Roll',
                'ingredients' => 'Crab meat, avocado, cucumber',
                'price' => 12.50,
                'cover_image' => 'item_images/california_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Spicy Tuna Roll',
                'ingredients' => 'Tuna, spicy mayo, cucumber',
                'price' => 14.75,
                'cover_image' => 'item_images/spicy_tuna_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Rainbow Roll',
                'ingredients' => 'Assorted fish, avocado, cucumber',
                'price' => 15.75,
                'cover_image' => 'item_images/rainbow_roll.jpeg',
                'available' => true,
            ]
        ];

        $paniniItems = [
            [
                'restaurant_id' => 4, // ID del ristorante a cui associare il panino
                'name' => 'Classic Cheeseburger',
                'ingredients' => 'Beef patty, cheese, lettuce, tomato, onion',
                'price' => 9.99,
                'cover_image' => 'item_images/cheeseburger.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Vegetarian Panini',
                'ingredients' => 'Grilled vegetables, hummus, spinach',
                'price' => 8.50,
                'cover_image' => 'item_images/vegetarian_panini.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Chicken Avocado Wrap',
                'ingredients' => 'Grilled chicken, avocado, lettuce, ranch dressing',
                'price' => 11.75,
                'cover_image' => 'item_images/chicken_avocado_wrap.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Turkey Club Sandwich',
                'ingredients' => 'Turkey, bacon, lettuce, tomato, mayo',
                'price' => 12.99,
                'cover_image' => 'item_images/turkey_club_sandwich.jpeg',
                'available' => true,
            ]
        ];
        // Popolo la tabella degli item con i dati delle pizze associate al ristorante con ID 1
        DB::table('items')->insert($pizze);
        DB::table('items')->insert($pastaDishes);
        DB::table('items')->insert($sushiItems);
        DB::table('items')->insert($paniniItems);
    }
}
