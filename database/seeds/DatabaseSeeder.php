<?php

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
        factory(App\Country::class,5)->create();
        factory(App\Movie::class,10)->create();
        factory(App\Member::class,10)->create();
        factory(App\Rank::class,10)->create();
    }
}
