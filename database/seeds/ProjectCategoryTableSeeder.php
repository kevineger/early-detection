<?php

use App\ProjectCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->delete();

        factory(App\ProjectCategory::class, 4)
            ->create();
    }
}
