<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product_images = [
    		[
	    		'product_id' => '1',
	    		'file' => '/assets/images/section-4/1.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '2',
	    		'file' => '/assets/images/section-4/2.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '3',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '4',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
			],[
	    		'product_id' => '5',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '6',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '7',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
			],[
	    		'product_id' => '8',
	    		'file' => '/assets/images/section-4/1.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '9',
	    		'file' => '/assets/images/section-4/2.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '10',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '11',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
			],[
	    		'product_id' => '12',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '13',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		],[
	    		'product_id' => '14',
	    		'file' => '/assets/images/section-4/3.png',
	    		'file_type' => 'I',
	    		'created_at' => date('Y-m-d H:i:s')
    		]
    	];

        //INSERT DATA INTO USERS ABLE
        \DB::table('product_images')->insert($product_images);
    }
}
