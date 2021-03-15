<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           factory(App\Product::class,30)->create();

        // DB::table('products')->insert([
        //     [
        //         'sku' => '#14545u6',
        //     'prod_cat_id' => '1',
        //     'cat_id' => '1',
        //     'prod_title' => 'Huawei Phone',
        //     'prod_img' => 'https://unsplash.com/photos/MPq-1IxX1nU',
        //     'prod_price' => '20',
        //     'prod_desc' => 'Released 2019, March 26. 165g, 7.6mm thickness. Android 9.0,
        //                     up to Android 10, EMUI 10. 64GB ...',
        //     ],
        //     [
        //         'sku' => '#14545u6',
        //         'prod_cat_id' => '1',
        //         'cat_id' => '1',
        //         'prod_title' => 'Huawei Phone',
        //         'prod_img' => 'https://unsplash.com/photos/O5d2JcMqDJQ',


        //         'prod_price' => '39',
        //         'prod_desc' => 'Released 2019, March 26. 165g, 7.6mm thickness. Android 9.0,
        //                         up to Android 10, EMUI 10. 64GB ...',
    
        //     ],
        //     [
        //         'sku' => '#14545u6',
        //         'prod_cat_id' => '1',
        //         'cat_id' => '1',
        //         'prod_title' => 'Huawei Phone',
        //         'prod_img' => 'https://unsplash.com/photos/YJaC7WYHtFo',


        //         'prod_price' => '65',
        //         'prod_desc' => 'Released 2019, March 26. 165g, 7.6mm thickness. Android 9.0,
        //                         up to Android 10, EMUI 10. 64GB ...',
    
        //     ],
        //     [
        //         'sku' => '#14545u6',
        //     'prod_cat_id' => '1',
        //     'cat_id' => '1',
        //     'prod_title' => 'Huawei Phone',
        //     'prod_img' => 'https://unsplash.com/photos/2JrpkyZ2ruQ',
        //     'prod_price' => '19',
        //     'prod_desc' => 'Released 2019, March 26. 165g, 7.6mm thickness. Android 9.0,
        //                     up to Android 10, EMUI 10. 64GB ...',

        //     ],
            
        // ]);
    }
}
