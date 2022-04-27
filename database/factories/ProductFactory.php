<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$faker->sentence,
            'description' =>$faker->sentence,
            'price' =>$faker->randomElement([100,190,200,300]),
            'cat_id'=>$faker->randomElement(Category::pluck('id'.'id')->toArray())
        ];
    }
}
