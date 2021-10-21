<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $index) {
            DB::table('categories')->insert([
                'name' => 'Category ' . $index,
                'parent_id' => '0',
                'slug' => ''
            ]);
            foreach (range(1, 3) as $index2) {
                DB::table('categories')->insert([
                    'name' => 'Category ' . $index . '.' . $index2,
                    'parent_id' => $index + ($index - 1) * 3,
                    'slug' => ''
                ]);
            }
        }
    }
}
