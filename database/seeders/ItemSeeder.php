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
                'restaurant_id' => 1, 
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
                'price' => 12.50,
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
                'restaurant_id' => 3, 
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
                'restaurant_id' => 4, 
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

        $pizzas2 = [
            [
                'restaurant_id' => 12,
                'name' => 'Pepperoni Pizza',
                'ingredients' => 'Tomato, mozzarella, pepperoni',
                'price' => 11.99,
                'cover_image' => 'item_images/pepperoni_pizza.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Mushroom Pizza',
                'ingredients' => 'Tomato, mozzarella, mushrooms, olives',
                'price' => 10.99,
                'cover_image' => 'item_images/mushroom_pizza.jpg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Hawaiian Pizza',
                'ingredients' => 'Tomato, mozzarella, ham, pineapple',
                'price' => 12.50,
                'cover_image' => 'item_images/hawaiian_pizza.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Meat Lovers Pizza',
                'ingredients' => 'Tomato, mozzarella, pepperoni, sausage, bacon',
                'price' => 13.75,
                'cover_image' => 'item_images/meat_lovers_pizza.jpeg',
                'available' => true,
            ]
        ];
        
        $pastaDishes2 = [
            [
                'restaurant_id' => 2,
                'name' => 'Fettuccine Alfredo',
                'ingredients' => 'Fettuccine, creamy Alfredo sauce',
                'price' => 13.99,
                'cover_image' => 'item_images/fettuccine_alfredo.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Penne Arrabbiata',
                'ingredients' => 'Penne, spicy tomato sauce, chili',
                'price' => 11.50,
                'cover_image' => 'item_images/penne_arrabbiata.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Linguine Carbonara',
                'ingredients' => 'Linguine, eggs, pancetta, cheese',
                'price' => 14.75,
                'cover_image' => 'item_images/linguine_carbonara.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Ravioli with Sage Butter Sauce',
                'ingredients' => 'Ravioli filled with ricotta and spinach, sage butter sauce',
                'price' => 15.99,
                'cover_image' => 'item_images/ravioli_sage_butter.webp',
                'available' => true,
            ]
        ];
        
        $sushiItems2 = [
            [
                'restaurant_id' => 11,
                'name' => 'Dragon Roll',
                'ingredients' => 'Shrimp tempura, avocado, eel, eel sauce',
                'price' => 16.99,
                'cover_image' => 'item_images/dragon_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Philadelphia Roll',
                'ingredients' => 'Smoked salmon, cream cheese, cucumber',
                'price' => 13.50,
                'cover_image' => 'item_images/philadelphia_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Tempura Shrimp Roll',
                'ingredients' => 'Tempura shrimp, avocado, cucumber',
                'price' => 14.75,
                'cover_image' => 'item_images/tempura_shrimp_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Salmon Nigiri',
                'ingredients' => 'Fresh salmon slices on sushi rice',
                'price' => 15.75,
                'cover_image' => 'item_images/salmon_nigiri.jpeg',
                'available' => true,
            ]
        ];
        
        $paniniItems2 = [
            [
                'restaurant_id' => 7,
                'name' => 'BBQ Pulled Pork Sandwich',
                'ingredients' => 'Slow-cooked pulled pork, BBQ sauce, coleslaw',
                'price' => 10.99,
                'cover_image' => 'item_images/bbq_pulled_pork_sandwich.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Mediterranean Panini',
                'ingredients' => 'Grilled chicken, roasted red peppers, feta cheese',
                'price' => 9.50,
                'cover_image' => 'item_images/mediterranean_panini.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Italian Sub',
                'ingredients' => 'Salami, ham, mortadella, provolone, lettuce, tomato',
                'price' => 12.75,
                'cover_image' => 'item_images/italian_sub.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Vegan Falafel Wrap',
                'ingredients' => 'Falafel, hummus, lettuce, tomato, tahini sauce',
                'price' => 11.99,
                'cover_image' => 'item_images/vegan_falafel_wrap.jpeg',
                'available' => true,
            ]
        ];

        $paniniItems3 = [
            [
                'restaurant_id' => 9,
                'name' => 'BBQ Pulled Pork Sandwich',
                'ingredients' => 'Slow-cooked pulled pork, BBQ sauce, coleslaw',
                'price' => 10.99,
                'cover_image' => 'item_images/bbq_pulled_pork_sandwich.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Mediterranean Panini',
                'ingredients' => 'Grilled chicken, roasted red peppers, feta cheese',
                'price' => 9.50,
                'cover_image' => 'item_images/mediterranean_panini.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Italian Sub',
                'ingredients' => 'Salami, ham, mortadella, provolone, lettuce, tomato',
                'price' => 12.75,
                'cover_image' => 'item_images/italian_sub.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Vegan Falafel Wrap',
                'ingredients' => 'Falafel, hummus, lettuce, tomato, tahini sauce',
                'price' => 11.99,
                'cover_image' => 'item_images/vegan_falafel_wrap.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9, 
                'name' => 'Classic Cheeseburger',
                'ingredients' => 'Beef patty, cheese, lettuce, tomato, onion',
                'price' => 9.99,
                'cover_image' => 'item_images/cheeseburger.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Vegetarian Panini',
                'ingredients' => 'Grilled vegetables, hummus, spinach',
                'price' => 8.50,
                'cover_image' => 'item_images/vegetarian_panini.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Chicken Avocado Wrap',
                'ingredients' => 'Grilled chicken, avocado, lettuce, ranch dressing',
                'price' => 11.75,
                'cover_image' => 'item_images/chicken_avocado_wrap.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Turkey Club Sandwich',
                'ingredients' => 'Turkey, bacon, lettuce, tomato, mayo',
                'price' => 12.99,
                'cover_image' => 'item_images/turkey_club_sandwich.jpeg',
                'available' => true,
            ]
        ];

        $pizzas3 = [
            [
                'restaurant_id' => 12,
                'name' => 'Vegetarian Pizza',
                'ingredients' => 'Tomato, mozzarella, bell peppers, mushrooms',
                'price' => 11.50,
                'cover_image' => 'item_images/vegetarian_pizza.webp',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Margherita con Bufala',
                'ingredients' => 'Tomato, buffalo mozzarella, basil',
                'price' => 13.99,
                'cover_image' => 'item_images/margherita_bufala.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Quattro Stagioni',
                'ingredients' => 'Tomato, mozzarella, ham, mushrooms, artichokes, olives',
                'price' => 14.75,
                'cover_image' => 'item_images/quattro_stagioni.avif',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Calzone',
                'ingredients' => 'Tomato, mozzarella, ham, mushrooms',
                'price' => 13.50,
                'cover_image' => 'item_images/calzone.jpeg',
                'available' => true,
            ]
        ];
        
        $pastaDishes3 = [
            [
                'restaurant_id' => 1,
                'name' => 'Rigatoni alla Amatriciana',
                'ingredients' => 'Rigatoni, tomato sauce, guanciale, pecorino cheese',
                'price' => 12.99,
                'cover_image' => 'item_images/rigatoni_amatriciana.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Gnocchi al Pesto',
                'ingredients' => 'Gnocchi, basil pesto, pine nuts',
                'price' => 11.50,
                'cover_image' => 'item_images/gnocchi_pesto.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Spaghetti Cacio e Pepe',
                'ingredients' => 'Spaghetti, pecorino cheese, black pepper',
                'price' => 13.75,
                'cover_image' => 'item_images/spaghetti_cacio_e_pepe.png',
                'available' => true,
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Ravioli alla Zucca',
                'ingredients' => 'Ravioli filled with pumpkin, sage butter sauce',
                'price' => 15.99,
                'cover_image' => 'item_images/ravioli_zucca.webp',
                'available' => true,
            ]
        ];
        
        $sushiItems3 = [
            [
                'restaurant_id' => 11,
                'name' => 'Tuna Nigiri',
                'ingredients' => 'Fresh tuna slices on sushi rice',
                'price' => 16.99,
                'cover_image' => 'item_images/tuna_nigiri.avif',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Spider Roll',
                'ingredients' => 'Soft shell crab, avocado, cucumber',
                'price' => 13.50,
                'cover_image' => 'item_images/spider_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Volcano Roll',
                'ingredients' => 'Spicy tuna, cucumber, topped with avocado',
                'price' => 14.75,
                'cover_image' => 'item_images/volcano_roll.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 11,
                'name' => 'Salmon Avocado Hand Roll',
                'ingredients' => 'Salmon, avocado, sushi rice wrapped in seaweed',
                'price' => 15.75,
                'cover_image' => 'item_images/salmon_avocado_hand_roll.jpeg',
                'available' => true,
            ]
        ];

        $italianDishes = [
            [
                'restaurant_id' => 12,
                'name' => 'Risotto ai Funghi',
                'ingredients' => 'Carnaroli rice, mushrooms, parmesan cheese',
                'price' => 14.99,
                'cover_image' => 'item_images/risotto_funghi.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Osso Buco alla Milanese',
                'ingredients' => 'Veal shanks, gremolata, saffron risotto',
                'price' => 17.50,
                'cover_image' => 'item_images/osso_buco_milanese.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Pappardelle al Tartufo',
                'ingredients' => 'Pappardelle pasta, truffle sauce',
                'price' => 16.75,
                'cover_image' => 'item_images/pappardelle_tartufo.avif',
                'available' => true,
            ],
            [
                'restaurant_id' => 12,
                'name' => 'Tiramisu',
                'ingredients' => 'Ladyfingers, mascarpone cheese, coffee, cocoa',
                'price' => 7.99,
                'cover_image' => 'item_images/tiramisu.webp',
                'available' => true,
            ]
        ];

        $gelatoItems = [
            [
                'restaurant_id' => 8,
                'name' => 'Classic Vanilla',
                'ingredients' => 'Vanilla ice cream',
                'price' => 5.99,
                'cover_image' => 'item_images/vanilla_gelato.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Rich Chocolate',
                'ingredients' => 'Chocolate ice cream',
                'price' => 6.50,
                'cover_image' => 'item_images/chocolate_gelato.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Strawberry Dream',
                'ingredients' => 'Strawberry ice cream with fresh strawberries',
                'price' => 6.75,
                'cover_image' => 'item_images/strawberry_gelato.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Pistachio Perfection',
                'ingredients' => 'Pistachio ice cream with chopped pistachios',
                'price' => 7.25,
                'cover_image' => 'item_images/pistachio_gelato.jpeg',
                'available' => true,
            ],
        ];

        $breakfastItems = [
            [
                'restaurant_id' => 10,
                'name' => 'Classic Pancakes',
                'ingredients' => 'Fluffy pancakes with maple syrup',
                'price' => 8.99,
                'cover_image' => 'item_images/classic_pancakes.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Eggs Benedict',
                'ingredients' => 'Poached eggs, Canadian bacon, hollandaise sauce on English muffins',
                'price' => 10.50,
                'cover_image' => 'item_images/eggs_benedict.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Avocado Toast',
                'ingredients' => 'Toasted bread topped with mashed avocado, tomatoes, and feta cheese',
                'price' => 9.75,
                'cover_image' => 'item_images/avocado_toast.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Fruit Parfait',
                'ingredients' => 'Layers of yogurt, granola, and fresh fruits',
                'price' => 7.99,
                'cover_image' => 'item_images/fruit_parfait.jpeg',
                'available' => true,
            ],
        ];

        $breakfastItems2 = [
            [
                'restaurant_id' => 5,
                'name' => 'Western Omelette',
                'ingredients' => 'Three-egg omelette with ham, bell peppers, onions, and cheese',
                'price' => 10.99,
                'cover_image' => 'item_images/western_omelette.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Belgian Waffles',
                'ingredients' => 'Fluffy waffles topped with whipped cream and fresh berries',
                'price' => 9.75,
                'cover_image' => 'item_images/belgian_waffles.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Breakfast Burrito',
                'ingredients' => 'Scrambled eggs, chorizo, black beans, cheese, and salsa wrapped in a tortilla',
                'price' => 11.50,
                'cover_image' => 'item_images/breakfast_burrito.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Greek Yogurt Bowl',
                'ingredients' => 'Greek yogurt topped with honey, nuts, and fresh fruits',
                'price' => 7.99,
                'cover_image' => 'item_images/greek_yogurt_bowl.jpeg',
                'available' => true,
            ],
        ];

        $sweetsItems = [
            [
                'restaurant_id' => 6,
                'name' => 'Chocolate Chip Cookies',
                'ingredients' => 'Classic chocolate chip cookies with a soft and chewy texture',
                'price' => 2.99,
                'cover_image' => 'item_images/chocolate_chip_cookies.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Red Velvet Cupcakes',
                'ingredients' => 'Moist red velvet cupcakes with cream cheese frosting',
                'price' => 3.50,
                'cover_image' => 'item_images/red_velvet_cupcakes.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Macarons Assortment',
                'ingredients' => 'Delicate French macarons in various flavors and colors',
                'price' => 2.75,
                'cover_image' => 'item_images/macarons_assortment.jpeg',
                'available' => true,
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Triple Chocolate Brownies',
                'ingredients' => 'Rich and fudgy brownies with three types of chocolate',
                'price' => 3.25,
                'cover_image' => 'item_images/triple_chocolate_brownies.jpeg',
                'available' => true,
            ],
        ];

        // Popolo le tabelle
        DB::table('items')->insert($pizze);
        DB::table('items')->insert($pastaDishes);
        DB::table('items')->insert($sushiItems);
        DB::table('items')->insert($paniniItems);
        DB::table('items')->insert($pizzas2);
        DB::table('items')->insert($pastaDishes2);
        DB::table('items')->insert($sushiItems2);
        DB::table('items')->insert($paniniItems2);
        DB::table('items')->insert($paniniItems3);
        DB::table('items')->insert($pizzas3);
        DB::table('items')->insert($pastaDishes3);
        DB::table('items')->insert($sushiItems3);
        DB::table('items')->insert($italianDishes);
        DB::table('items')->insert($gelatoItems);
        DB::table('items')->insert($breakfastItems);
        DB::table('items')->insert($breakfastItems2);
        DB::table('items')->insert($sweetsItems);

    }
}
