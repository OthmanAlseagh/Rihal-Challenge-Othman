<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Level;
use App\Models\Student;
use Illuminate\Database\Seeder;

class AddCountryAndLevelToStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = Student::all();

        foreach ($students as $student)
        {
            $student->update([
                'country_id' => Country::inRandomOrder()->first()->id,
                'level_id' => Level::inRandomOrder()->first()->id
            ]);
        }
    }
}
