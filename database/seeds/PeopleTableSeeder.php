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

        factory(App\People::class, 'current_student', 12)->create();
        factory(App\People::class, 'past_student', 24)->create();
        factory(App\People::class, 'current_staff', 6)->create();
        factory(App\People::class, 'past_staff', 4)->create();
        factory(App\People::class, 'partner', 30)->create();
    }
}
