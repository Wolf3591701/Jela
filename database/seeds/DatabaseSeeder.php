<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(LanguageSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(CategorySeed::class);
        $this->call(IngredientSeed::class);
        $this->call(TagSeed::class);

    }
}
