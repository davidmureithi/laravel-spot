<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Service::create(["name"=>"Laundry"]);
        \App\Service::create(["name"=>"Cooking"]);
        \App\Service::create(["name"=>"Shopping"]);
        \App\Service::create(["name"=>"Furniture"]);

    }
}
