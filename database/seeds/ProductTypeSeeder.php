<?php

use \Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProductType::class, 20)->create();
    }
}
