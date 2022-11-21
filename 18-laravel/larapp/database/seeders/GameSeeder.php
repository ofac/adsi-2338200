<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gm = new Game;
        $gm->name = 'Mario Odyssey';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 1;
        $gm->slider = 1;
        $gm->price = 55;
        $gm->save();

        $gm = new Game;
        $gm->name = 'Halo Infinite';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 2;
        $gm->slider = 0;
        $gm->price = 60;
        $gm->save();

        $gm = new Game;
        $gm->name = 'God of War Ragnarok';
        $gm->description = 'Lorem ipsum dolor sit amet';
        $gm->user_id = 1;
        $gm->category_id = 3;
        $gm->slider = 0;
        $gm->price = 80;
        $gm->save();
    }
}
