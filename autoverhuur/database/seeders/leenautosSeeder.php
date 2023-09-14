<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class leenautosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leenautos')->insert([
            "merk" => "Ford",
            "type" => "Ka",
            "bouwjaar" => "1996",
        ]);

        DB::table('leenautos')->insert([
            "merk" => "Kia",
            "type" => "Picanto",
            "bouwjaar" => "2004",
        ]);

        DB::table('leenautos')->insert([
            "merk" => "Mclaren",
            "type" => "P1",
            "bouwjaar" => "2013",
        ]);

        DB::table('leenautos')->insert([
            "merk" => "Mini Cooper",
            "type" => "S",
            "bouwjaar" => "2002",
        ]);

        DB::table('leenautos')->insert([
            "merk" => "Audi",
            "type" => "R8",
            "bouwjaar" => "2007",
        ]);
    }
}
