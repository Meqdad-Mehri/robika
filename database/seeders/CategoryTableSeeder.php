<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            DB::table('categories')->insert([
                'name' => $faker->name(),
                'description'=>$faker->paragraph(5),
                'image' =>$faker->imageUrl($width=300 , $hieght=200),
    

            ]);
        }
        
    }
}
