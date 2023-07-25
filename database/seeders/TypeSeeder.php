<?php

namespace Database\Seeders;

use App\Models\Admin\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Pizza',
            'Chinese Cuisine',
            'Kebab',
            'Ice Cream',
            'Hamburger and Sandwich',
            'Breakfast',
            'Sushi',
            'Italian Cuisine'
        ];

        foreach ($types as $elem) {
            $new_type = new Type();
            $new_type->name = $elem;
            $new_type->save();
        }
    }
}
