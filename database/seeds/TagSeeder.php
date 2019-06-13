<?php

use Illuminate\Database\Seeder;
use Faker\Factory;


class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $items = [
            
            ['title' => 'tag 1 HR', 'slug' => 'tag-1-hr', 'language_id' => '2',],
            ['title' => 'tag 2 HR', 'slug' => 'tag-2-hr', 'language_id' => '2',],
            ['title' => 'tag 3 HR', 'slug' => 'tag-3-hr', 'language_id' => '2',],
            ['title' => 'tag 4 HR', 'slug' => 'tag-4-hr', 'language_id' => '2',],
            ['title' => 'tag 5 HR', 'slug' => 'tag-5-hr', 'language_id' => '2',],

        ];

        foreach ($items as $item) {
            \App\Tag::create($item);
        }
        
        $faker = Faker\Factory::create();
  

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tags')->insert([ //,
                'title' => $faker->unique()->word,
                'slug' => $faker->unique()->slug,
                'language_id' => $faker->numberBetween($min = 1, $max = 3)
            ]);
        }

    }
}
