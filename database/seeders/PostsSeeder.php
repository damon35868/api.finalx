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
        for ($i = 0; $i < 20; $i++) {
            DB::table('posts')->insert([
                [
                    'content' => "测试内容" . rand(1, 10),
                    'userId' => rand(1, 9),
                ],
                [
                    'content' => "测试文本" . rand(1, 10),
                    'userId' => rand(1, 9),
                ]
            ]);
        }
    }
}
