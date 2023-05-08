<?php

namespace Database\Seeders;
use App\Models\post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $post = new post();
        $post->user_id = "1";
        $post->title = "Engeland";
        $post->text = "de big ben is 96m hoog";
        $post->name = "Gino";
        $post->date = "2021-03-14";
        $post->save();
    }
}
