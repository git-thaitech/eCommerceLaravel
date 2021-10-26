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
        $productNum = 20;
        $numberOfCategories=10;
        $numberOfUsers = 10;
        $this->addSampleProducts($productNum, $numberOfCategories);
        $this->addSampleUsers($numberOfUsers);
        $this->addSampleProductImages($productNum);
        $this->addSampleOrders(20,$numberOfUsers);
        $this->addSampleCategories($numberOfCategories);
        $this->addSampleProductsInOrders(20, $productNum);
    }

    /**
     * Create a sample list of categories
     * @param $numberOfCategories
     */
    public function addSampleCategories($numberOfCategories)
    {
        foreach(range(1, $numberOfCategories) as $index) 
        {
            DB::table('categories')->insert([
                'name' => 'Category '.$index
            ]);
        }
    }

    /**
     * Create a sample list of products
     * @param $numberOfProducts
     */
    public function addSampleProducts(int $numberOfProducts, int $numberOfCategories)
    {
        for ($i = 1; $i <= $numberOfProducts; $i++) {
            DB::table('products')->insert(
                [
                    'name' => 'Product ' . $i,
                    'quantity' => random_int(5, 20),
                    'price' => rand(150, 1000) / 10,
                    'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'category_id' => random_int(1,$numberOfCategories)
                ]
            );
        }
    }

    /**
     * Create a sample list of users. There are two types of users: admin and customer.
     * @param $numberOfUsers
     */
    public function addSampleUsers($numberOfUsers)
    {
        $customer = 1;
        $admin = 1;
        $domainEmail = array('@gmail.com', '@yahoo.com', '@icloud.com');
        for ($i = 1; $i <= $numberOfUsers; $i++) {

            $k = random_int(0,2);
            if ($i % 4 == 0) {
                DB::table('users')->insert([
                    'email' => 'admin' . $admin . $domainEmail[$k],
                    'name' => 'Admin ' . $admin,
                    'password' => '123456',
                    'role' => 'ADM'
                ]);
                $admin++;
            } else {
                DB::table('users')->insert([
                    'email' => 'customer' . $customer . $domainEmail[$k],
                    'name' => 'Customer ' . $i,
                    'password' => '123456',
                    'role' => 'CSTM'
                ]);
                $customer++;
            }
        }
    }

    /**
     * Create a sample list of orders
     * @param $numberOfUsers - to add user_id as a foreign key of order table
     * @param $numberOfOrders
     */
    public function addSampleOrders($numberOfOrders, $numberOfUsers)
    {
        foreach( range(1, $numberOfOrders) as $index) {
            DB::table('orders') -> insert([
                'user_id' => random_int(1,$numberOfUsers),
                'address' => 'Address '.$index
            ]);
        }
    }

    /**
     * Create a sample list of Products in Orders to store a number of products in one order.
     * Products will be added randomly to orders
     * @param $numberOfOrders, $numberOfProducts
     */
    public function addSampleProductsInOrders($numberOfOrders, int $numberOfProducts)
    {
        foreach(range(1, $numberOfOrders) as $orderIndex) {
            $numberOfProductsInAOrder = random_int(1, 4);
            
            //Add a list of products to an order based on a random number of products
            foreach(range(1, $numberOfProductsInAOrder) as $index) {
                DB::table('products_in_orders')->insert([
                    'order_id' => $orderIndex,
                    'product_id' => $numberOfProducts/$index,
                    'quantity' => random_int(1,5),
                    'price' => rand(150, 1000) / 10
                ]);
            }

        }
    }


    /**
     * Create a list of images that maps with products.
     * @param $numberOfProducts
     */
    public function addSampleProductImages($numberOfProducts)
    {

        for ($i = 1; $i <= $numberOfProducts; $i++) {
            foreach (range(1, 3) as $j) {
                DB::table('product_images')->insert([
                    'imageName' => 'Photo ' . $i . '.' . $j,
                    'imageURL' => 'photo' . $i . '-' . $j . '.png',
                    'product_id' => $i
                ]);
            }
        }
    }
}





// foreach (range(1, $num1) as $index1) {
//     DB::table('categories')->insert([
//         'name' => 'Category ' . $index1,
//         'parent_id' => '0',
//         'slug' => ''
//     ]);
//     foreach (range(1, $num2) as $index2) {
//         DB::table('categories')->insert([
//             'name' => 'Category ' . $index1 . '.' . $index2,
//             'parent_id' => ($num2 * $num3 + $num2 + 1) * ($index1 - 1) + 1,
//             'slug' => ''
//         ]);
//         foreach (range(1, $num3) as $index3) {

//             DB::table('categories')->insert([
//                 'name' => 'Category ' . $index1 . '.' . $index2 . '.' . $index3,
//                 'parent_id' => ($num2 * $num3 + $num2 + 1) * ($index1 - 1) + ($index2 - 1) * $num3 + 1 + $index2,
//                 'slug' => ''
//             ]);
//         }
//     }
// }
