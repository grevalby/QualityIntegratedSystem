<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['machine'=>'207#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'208#', 'tonnage'=>'280T', 'maker'=>''],
            ['machine'=>'209#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'210#', 'tonnage'=>'530T', 'maker'=>''],
            ['machine'=>'213#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'214#', 'tonnage'=>'600T', 'maker'=>''],
            ['machine'=>'220#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'221#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'250#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'278#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'293#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'314#', 'tonnage'=>'280T', 'maker'=>''],
            ['machine'=>'332#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'341#', 'tonnage'=>'90T', 'maker'=>''],
            ['machine'=>'342#', 'tonnage'=>'180T-S', 'maker'=>''],
            ['machine'=>'350#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'352#', 'tonnage'=>'470T', 'maker'=>''],
            ['machine'=>'353#', 'tonnage'=>'800T', 'maker'=>''],
            ['machine'=>'368#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'369#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'370#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'371#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'372#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'373#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'374#', 'tonnage'=>'280T', 'maker'=>''],
            ['machine'=>'375#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'376#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'377#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'409#', 'tonnage'=>'250T', 'maker'=>''],
            ['machine'=>'468#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'469#', 'tonnage'=>'160T', 'maker'=>''],
            ['machine'=>'470#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'471#', 'tonnage'=>'380T', 'maker'=>''],
            ['machine'=>'472#', 'tonnage'=>'470T', 'maker'=>''],
        ];

        foreach ($data as $value) {
            Machine::insert([
                'machine' => $value['machine'],
                'tonnage' => $value['tonnage'],
                'maker' => $value['maker']
            ]);
        }
    }
}
