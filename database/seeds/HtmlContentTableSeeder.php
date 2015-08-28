<?php

use App\HtmlContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HtmlContentTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('html_contents')->delete();

        HtmlContent::create(['html' => file_get_contents('public/html_templates/research.txt'), 'html_default' => file_get_contents('public/html_templates/research.txt'), 'page' => 'research']);

    }
}
