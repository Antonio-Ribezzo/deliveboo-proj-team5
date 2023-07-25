<?php

namespace Database\Seeders;

use App\Models\Admin\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recupera gli ID dei 4 ristoranti dal database
        $restaurantIds = Restaurant::pluck('id')->toArray();

        // Esempio di dati per 4 utenti
        $users = [
            [
                // 'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'restaurant_id' => 1,
            ],
            [
                // 'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('securepass456'),
                'restaurant_id' => 2,
            ],
            [
                // 'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'password' => Hash::make('mypass789'),
                'restaurant_id' => 3,
            ],
            [
                // 'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'password' => Hash::make('password987'),
                'restaurant_id' => 4,
            ],
        ];

        // Popolare la tabella "users" con i dati di esempio
        DB::table('users')->insert($users);
    }

    /**
     * Metodo per ottenere casualmente uno degli ID dei ristoranti.
     *
     * @param array<int> $restaurantIds
     * @return int|null
     */
    // private function getRandomRestaurantId(array $restaurantIds)
    // {
    //     return count($restaurantIds) > 0 ? $restaurantIds[array_rand($restaurantIds)] : null;
    // }
}
