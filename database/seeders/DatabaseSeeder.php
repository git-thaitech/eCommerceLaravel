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
        $this->multiLevelCategories(3, 2, 3);
    }

    public function multiLevelCategories($num1 = 0, $num2 = 0, $num3 = 0)
    {
        foreach (range(1, $num1) as $index1) {
            DB::table('categories')->insert([
                'name' => 'Category ' . $index1,
                'parent_id' => '0',
                'slug' => ''
            ]);
            foreach (range(1, $num2) as $index2) {
                DB::table('categories')->insert([
                    'name' => 'Category ' . $index1 . '.' . $index2,
                    'parent_id' => ($num2 * $num3 + $num2 + 1) * ($index1 - 1) + 1,
                    'slug' => ''
                ]);
                foreach (range(1, $num3) as $index3) {

                    DB::table('categories')->insert([
                        'name' => 'Category ' . $index1 . '.' . $index2 . '.' . $index3,
                        'parent_id' => ($num2 * $num3 + $num2 + 1) * ($index1 - 1) + ($index2 - 1) * $num3 + 1 + $index2,
                        'slug' => ''
                    ]);
                }
            }
        }
    }
}
