<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubric;


class RubricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rubric::create([
            'parent_id' => null,
            'name'      => 'Общество',
        ]);
        Rubric::create([
            'parent_id' => 1,
            'name'      => 'городская жизнь',
        ]);
        Rubric::create([
            'parent_id' => 1,
            'name'      => 'выборы',
        ]);
        Rubric::create([
            'parent_id' => null,
            'name'      => 'День города',
        ]);
        Rubric::create([
            'parent_id' => 4,
            'name'      => 'салюты',
        ]);
        Rubric::create([
            'parent_id' => 4,
            'name'      => 'детская площадка',
        ]);
        Rubric::create([
            'parent_id' => 6,
            'name'      => '0-3 года',
        ]);
        Rubric::create([
            'parent_id' => 6,
            'name'      => '3-7 года',
        ]);
        Rubric::create([
            'parent_id' => null,
            'name'      => 'Спорт',
        ]);

    }
}
