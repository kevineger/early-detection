<?php

use Illuminate\Database\Seeder;

class PublicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->delete();

        factory(App\Publication::class, 'abstractConferenceCommentary', 30)->create();
        factory(App\Publication::class, 'journal', 10)->create();
        factory(App\Publication::class, 'thesis', 4)->create();
    }
}
