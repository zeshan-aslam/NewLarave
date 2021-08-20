<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert(
            ['name'=>'New mobiles',
            'price'=>'18000',
            'category'=>'Mobiles',
            'description'=>'a smart phone with for 4gb ram and 32gb rom',
            'gallery'=>'public\images\vivo.jpg', 
          ]
         );
    }
}
