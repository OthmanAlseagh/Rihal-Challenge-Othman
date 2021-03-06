<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels =[
            'first',
            'second',
            'third',
            'forth',
            'fifth',
            'sixth',
            'seventh',
            'eighth',
            'ninth',
            'tenth',
            ];
        foreach ($levels as $level){
            Level::factory()->create(['name' => $level]);
        }
    }
}
