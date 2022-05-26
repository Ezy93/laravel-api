<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;
use App\Models\Post;

class CategoriesPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $category_ids = Category::pluck('id')->toArray();
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->categories()
            ->sync($faker->randomElements($category_ids , 2));
        }


    }
}