<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        	UserRoleSeeder::class,
	        UserSeeder::class,
	        ProductCategorySeeder::class,
	        ProductSeeder::class,
	        ProductImagesSeeder::class,
            AddressTableDataSeeder::class,
            OrderTableDataSeeder::class,
            OrderDetailTableDataSeeder::class,
            ProductWishlistTableDataSeeder::class,
            AdminRoleSeeder::class,
	    ]);
    }
}
