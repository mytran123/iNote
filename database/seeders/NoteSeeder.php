<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("notes")->insert([
            ["name" => "Meeting","category" => "Work","description" => "Meeting on monday at 8 o'clock"],
            ["name" => "Case","category" => "Work","description" => "Show case study today"],
            ["name" => "English","category" => "Learn","description" => "Learn english 3 days a week"],
            ["name" => "Last week","category" => "Family","description" => "This friday is my husband's birthday"],
            ["name" => "Drink","category" => "Friend","description" => "Going to drink coffee this weekend"],
            ["name" => "Shopping","category" => "Friend","description" => "Go shopping together"]
        ]);
    }
}
