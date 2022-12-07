<?php

namespace Database\Seeders;

use App\Models\LevelOfDefect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelOfDefectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['level_of_defects'=>'Serious Defects'],
            ['level_of_defects'=>'General Defects'],
            ['level_of_defects'=>'General Unqualified(Automatic Assembly Workshop)'],
        ];

        foreach ($data as $value) {
            LevelOfDefect::insert([
                'level_of_defects' => $value['level_of_defects']
            ]);
        }
    }
}
