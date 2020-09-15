<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10 ; $i++) {
        $new_post = new Post();
        $new_post->user_id = 1;
        $new_post->image = $faker->imageUrl();
        $new_post->title = $faker->sentence();
        $new_post->content = $faker->text(700);
        $new_post->save();
      }
    }
}