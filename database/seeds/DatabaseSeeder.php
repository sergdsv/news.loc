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
        $categoryIds = factory(App\Category::class, 10)->create()->pluck('id')->toArray();
        factory(App\Post::class, 100)->create()->each(function($post) use ($categoryIds) {
            $post->category_id = rand(1, count($categoryIds));
            $post->save();
        });
    }
}
