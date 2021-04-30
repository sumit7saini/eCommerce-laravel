<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
        	[
        		'name' => 'Oppo mobile',
        		'price' => '300',
        		'description' => 'A smartphone with 8gb ram and much more features',
        		'category' => 'mobile',
        		'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A1K-CPHFUTU629745487742B8/1564552737041_0..png?imwidth=320&impolicy=hq'
        	],
        	[
        		'name' => 'Panasonic TV',
        		'price' => '400',
        		'description' => 'A smart tv with much more features',
        		'category' => 'tv',
        		'gallery' => 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
        	],
        	[
        		'name' => 'Sony TV',
        		'price' => '500',
        		'description' => 'A tv and much more features',
        		'category' => 'tv',
        		'gallery' => 'https://5.imimg.com/data5/SZ/CD/ZN/SELLER-1109925/led-tv-500x500.png'
        	],
        	[
        		'name' => 'LG fridge',
        		'price' => '100',
        		'description' => 'A fridge with much more features',
        		'category' => 'fridge',
        		'gallery' => 'https://5.imimg.com/data5/UY/GF/QU/SELLER-36249512/whirlpool-single-door-refrigerator-500x500.jpg'
        	]
        ]);
    }
}
