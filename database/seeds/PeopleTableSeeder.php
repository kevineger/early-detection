<?php

use App\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder {

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
        People::create(['name' => 'Kevin Eger', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Tony Culos', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Duncan Sardines', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Bre Banana', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Becca Bonzai', 'type' => 'current_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Old Student', 'type' => 'past_student', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Rasika Rajapakshe', 'type' => 'current_staff', 'position' => 'Research Intern', 'education' => 'M.D. School of Awesomeness', 'description' => 'This is the description.']);
        People::create(['name' => 'Sara Taylor', 'type' => 'current_staff', 'position' => 'Research Intern', 'education' => 'M.D. School of Awesomeness', 'description' => 'This is the description.']);
        People::create(['name' => 'Old Staff', 'type' => 'past_staff', 'position' => 'Research Intern', 'education' => 'M.D. School of Awesomeness', 'description' => 'This is the description.']);
        People::create(['name' => 'Donald Trump', 'type' => 'partner', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Rick James', 'type' => 'partner', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Bill Gates', 'type' => 'partner', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
        People::create(['name' => 'Sergey Brin', 'type' => 'partner', 'position' => 'Research Intern', 'education' => 'B.Sc Computer Science - University of British Columbia Okanagan', 'description' => 'This is the description.']);
    }
}
