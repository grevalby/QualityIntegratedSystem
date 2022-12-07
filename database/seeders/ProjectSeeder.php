<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['project'=>'150B'],
            ['project'=>'150B/690A'],
            ['project'=>'168D'],
            ['project'=>'228D'],
            ['project'=>'23M'],
            ['project'=>'26PL'],
            ['project'=>'300D'],
            ['project'=>'3M0'],
            ['project'=>'400B'],
            ['project'=>'560B'],
            ['project'=>'570B'],
            ['project'=>'665B'],
            ['project'=>'670B'],
            ['project'=>'775B'],
            ['project'=>'893B'],
            ['project'=>'900B'],
            ['project'=>'900B/100B'],
            ['project'=>'970B'],
            ['project'=>'D26A'],
            ['project'=>'D26A S'],
            ['project'=>'D26A Y'],
            ['project'=>'D55L'],
            ['project'=>'D55L S'],
            ['project'=>'D55L Y'],
            ['project'=>'D97L'],
            ['project'=>'DC'],
            ['project'=>'MS2'],
            ['project'=>'T50'],
            ['project'=>'TENMA'],
            ['project'=>'T-Project'],
            ['project'=>'XC2B'],
        ];

        foreach ($data as $value) {
            Project::insert([
                'project' => $value['project']
            ]);
        }
    }
}
