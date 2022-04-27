<?php

namespace Database\Seeders;
use DB;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        foreach(range(1,29) as $index){
            DB::table('products')->insert([
            'name' =>$faker->name(),
            'description' =>$faker->paragraph(5),
            'price' =>$faker->randomElement([100,190,200,300]),
            'discount'=>$faker->randomElement([1,20]),
            'cat_id'=>$faker->randomElement([1,10]),
            ]);
        }
    }
}
