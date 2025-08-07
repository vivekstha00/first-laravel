<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Category::updateOrCreate(
                [
                'name' => 'Category ' . $i,
                ],
                [
                'description' => 'Category ' . $i. 'desc',
                'status' => ($i % 2 == 0) ? 1 : 0,
                ]
            );
        }    
    }
}
