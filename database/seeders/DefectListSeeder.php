<?php

namespace Database\Seeders;

use App\Models\DefectList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefectListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['defect'=>'Short shot', 'level_id'=>'1'],
            ['defect'=>'Excess material', 'level_id'=>'1'],
            ['defect'=>'Breakage & Damage', 'level_id'=>'1'],
            ['defect'=>'Poor airtightness', 'level_id'=>'1'],
            ['defect'=>'Assembly omission', 'level_id'=>'1'],
            ['defect'=>'Improper assembly', 'level_id'=>'1'],
            ['defect'=>'No reviting', 'level_id'=>'1'],
            ['defect'=>'Insufficient/Over riveting', 'level_id'=>'1'],
            ['defect'=>'Reversed & Wrong assy', 'level_id'=>'1'],
            ['defect'=>'Over assembly', 'level_id'=>'1'],
            ['defect'=>'Bubble & Bulge', 'level_id'=>'2'],
            ['defect'=>'Spotted / Black Dot', 'level_id'=>'2'],
            ['defect'=>'Weld mark', 'level_id'=>'2'],
            ['defect'=>'Silver, Splay & Whitening', 'level_id'=>'2'],
            ['defect'=>'Flow mark', 'level_id'=>'2'],
            ['defect'=>'Flash', 'level_id'=>'2'],
            ['defect'=>'Deform', 'level_id'=>'2'],
            ['defect'=>'Peeling', 'level_id'=>'2'],
            ['defect'=>'Foreign matter & Foreign object', 'level_id'=>'2'],
            ['defect'=>'Hole', 'level_id'=>'2'],
            ['defect'=>'Discoloration', 'level_id'=>'2'],
            ['defect'=>'UnderCut,Stretch,press,overcut,scratch,collision', 'level_id'=>'2'],
            ['defect'=>'Dent mark', 'level_id'=>'2'],
            ['defect'=>'Mixed products', 'level_id'=>'2'],
            ['defect'=>'Qty discrepancy', 'level_id'=>'2'],
            ['defect'=>'Burnt', 'level_id'=>'2'],
            ['defect'=>'Missing & Improper dot marking', 'level_id'=>'2'],
            ['defect'=>'Iron debris', 'level_id'=>'2'],
            ['defect'=>'Oil stain', 'level_id'=>'2'],
            ['defect'=>'Stranded & Dropped parts', 'level_id'=>'2'],
            ['defect'=>'Injured', 'level_id'=>'3'],
            ['defect'=>'Overlarge Gap betwwen Clamps', 'level_id'=>'3'],
            ['defect'=>'Discotinuous Printing', 'level_id'=>'3'],
            ['defect'=>'Overlapping Printing', 'level_id'=>'3'],
            ['defect'=>'Unclear', 'level_id'=>'3'],
            ['defect'=>'Letter Deformation', 'level_id'=>'3'],
            ['defect'=>'Wrong letter', 'level_id'=>'3'],
            ['defect'=>'Wrong position', 'level_id'=>'3'],
            ['defect'=>'Wrong Letter Size', 'level_id'=>'3'],
            ['defect'=>'Hole(Laser)', 'level_id'=>'3'],
            
        ];

        foreach ($data as $value) {
            DefectList::insert([
                'defect' => $value['defect'],
                'level_id' => $value['level_id'],
            ]);
        }
    }
}
