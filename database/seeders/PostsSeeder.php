<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $faker = \Faker\Factory::create();

        while( $i < 50 ) {
            DB::table('posts')->insert([
                'title' => $faker->text(80),
                'created_at' => $faker->dateTimeBetween('-1 month', 'now')
            ]);
            $i++;
        }
    }
}
