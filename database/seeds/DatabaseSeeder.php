<?php

use Illuminate\Database\Seeder;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        factory(App\Country::class, 5)->create();
        factory(App\Member::class, 10)->create();

        foreach ($this->items() as $item) {
            Category::create($item);
        }

        factory(App\Category_movie::class, 10)->create();
//        factory(App\Movie::class, 10)->create();
        factory(App\Rank::class, 10)->create();

    }

    private function items()
    {
        return [
            ['name' => 'Action'],
            ['name' => 'Adventure'],
            ['name' => 'Comedy'],
            ['name' => 'Crime & Gangster'],
            ['name' => 'Drama'],
            ['name' => 'Horror'],
            ['name' => 'Musicals'],
            ['name' => 'War'],
        ];
    }
}
