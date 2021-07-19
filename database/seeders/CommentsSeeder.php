<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Posts::all();
        $posts = json_decode($posts);

        $faker = \Faker\Factory::create();
        
        foreach( $posts as $post) {
            $i = 0;
            $addPost = rand(6,20);
            while( $i < $addPost ) {
                DB::table('comments')->insert([
                    'post_id' => $post->id,
                    'user_name' => $faker->name(),
                    'comment' => $faker->text(),
                    'created_at' => $faker->dateTimeBetween('-1 month', 'now')
                ]);
                $i++;
            }
        }

    }
}
