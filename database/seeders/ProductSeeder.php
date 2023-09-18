<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('products')->insert([
            [
                'name' => 'LG i10',
                'price' => 100,
                'description' => '4gb 64gb',
                'category' => 'Mobile',
                
            ],
        ]);
    }
}
