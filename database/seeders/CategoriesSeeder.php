<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'          => 'Holidays',
                'slug'          => 'holidays',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Camping',
                'slug'          => 'camping',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
