<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Generator $faker): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $post = new Post();
            $post->title = $faker->text(20);
            $post->content = $faker->paragraph(15, true);
            $post->slug = Str::slug($post->title, '-');
            $post->image = $faker->imageUrl(250, 250);
            $post->save();
        }
    }
}
