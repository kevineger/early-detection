<?php

use App\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();

        People::create(['name' => 'John Doe', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Jane Doe', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Ron Funches', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Donald Trump', 'type' => 'past_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Rick James', 'type' => 'past_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
    }
}
