<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ctg = new Category;
        $ctg->name = 'Nintendo Switch';
        $ctg->description = 'Lorem ipsum dolor sit amet';
        $ctg->save();
        
        $ctg = new Category;
        $ctg->name = 'Xbox Series S/X';
        $ctg->description = 'Lorem ipsum dolor sit amet';
        $ctg->save();

        $ctg = new Category;
        $ctg->name = 'Play Station 5';
        $ctg->description = 'Lorem ipsum dolor sit amet';
        $ctg->save();

    }
}
