<?php

use Illuminate\Database\Seeder;

class testApiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\testApi::class,30)->create();
    }
}
