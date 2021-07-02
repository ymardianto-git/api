<?php

use App\Model\Review;
use App\Model\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        factory(App\Model\Product::class, 50)->create();
        factory(App\Model\Review::class, 300)->create();
    }
}
