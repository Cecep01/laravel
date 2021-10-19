<?php

namespace Database\Seeders;

use  Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Tips Dapat Nikah',
                'content' => 'lorem ipsum'
            ],
            [
                'title' => 'Haruskah Menunda Nikah?',
                'content' => 'lorem ipsum'
            ],
            [
                'title' => 'membangun visi misi keluarga',
                'content' => 'lorem ipsum' 
            ]
        ];
        DB::table('posts')->insert($posts);

    }
}
