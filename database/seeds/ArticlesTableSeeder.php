<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        // Truncate our existing records
        Article::truncate();

        $faker = \Faker\Factory::create();

        // Creating articles in our db
        for($i = 0; $i < 20; $i++)
        {
            Article::create([
                'title' => $faker->sentence,
                'body'  => $faker->paragraph
            ]);
        }


        //factory(Article::class,50)->create();
    }
}
