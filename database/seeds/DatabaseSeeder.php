<?php

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
        DB::table('areas')->insert(['setzon' => '1234', 'descricao' => 'Santo Andre']);
        DB::table('areas')->insert(['setzon' => '5678', 'descricao' => 'Sao Bernardo do Campo']);
        DB::table('areas')->insert(['setzon' => '9876', 'descricao' => 'Sao Paulo']);

        DB::table('sellers')->insert(['codven' => '1122', 'nome' => 'Bernardo']);
        DB::table('sellers')->insert(['codven' => '3344', 'nome' => 'Cristian']);

        DB::table('area_sellers')->insert(['codven' => '1122', 'setzon' => '1234']);
        DB::table('area_sellers')->insert(['codven' => '1122', 'setzon' => '5678']);
        DB::table('area_sellers')->insert(['codven' => '3344', 'setzon' => '9876']);
    }
}
