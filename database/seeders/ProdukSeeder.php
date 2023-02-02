<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<= 10; $i++){
            Produk::create([
                'titles' => 'Kursi Goyang'.$i,
                'prices' =>  fake()->numberBetween(50, 999) . '000',
                'stock' => rand(10, 150),
                'images' => '',
                'orders' => 1,
            ]);
        }
        
    }
}
