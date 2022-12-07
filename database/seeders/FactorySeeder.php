<?php

namespace Database\Seeders;

use App\Models\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['factory'=>'JOHAR'],
            ['factory'=>'SUNGKAI'],
        ];

        foreach ($data as $value) {
            Factory::insert([
                'factory' => $value['factory']
            ]);
        }
    }
}
