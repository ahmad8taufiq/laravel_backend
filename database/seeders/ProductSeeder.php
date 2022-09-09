<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code' => 'A001',
            'name' => 'Pakaian Anak',
            'category' => 'Pakaian',
            'unit' => 'Pcs',
            'price' => 10000,
        ]);
    }
}
