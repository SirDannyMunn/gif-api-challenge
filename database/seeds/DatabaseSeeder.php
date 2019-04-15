<?php

use Illuminate\Database\Seeder;
use App\Gif;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gifs = ['talyor_swift', 'colourful_ribbon', 'radial_colours'];

        foreach ($gifs as $gif) {
           factory(Gif::class)->create(['name' => $gif]); 
        }
    }
}
