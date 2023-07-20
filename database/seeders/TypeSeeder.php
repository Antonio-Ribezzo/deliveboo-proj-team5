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
            'Chinese cuisine',
            'Kebab',
            'ice cream',
            'Sweets',
            'Indian cuisine',
            'Hamburger & Sandwich',
            'Breakfast',
            'Piadina',
            'Mexican cuisine',
            'Sushi'
        ];

        foreach ($types as $elem) {
            $new_type = new Type();
            $new_type->name = $elem;
            $new_type->save();
        }
    }
}
