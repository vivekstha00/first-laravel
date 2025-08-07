<?php

namespace Database\Seeders;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Item::updateOrCreate(
                [
                'name' => 'Item ' . $i,
                ],
                [
                'category_id' => rand(1, 10),
                'description' => 'Item ' . $i. 'desc',
                'image' => 'item' . $i . '.jpg',
                'price' => rand(100, 1000),
                'quantity' => rand(1, 100),
                'status' => ($i % 2 == 0) ? 1 : 0,
                'created_at' => now(),
                'updated_at' => now(),
                

                ]
            );
        } 
    }
}
