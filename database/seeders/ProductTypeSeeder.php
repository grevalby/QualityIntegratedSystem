<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_type'=>'BBM'],
            ['product_type'=>'BBM ASSY'],
            ['product_type'=>'PROTECTOR'],
            ['product_type'=>'RB BASE'],
            ['product_type'=>'RB FRAME'],
            ['product_type'=>'RB LOWER COVER'],
            ['product_type'=>'RB SIDE COVER'],
            ['product_type'=>'RB UPPER COVER'],
        ];

        foreach ($data as $value) {
            ProductType::insert([
                'product_type' => $value['product_type']
            ]);
        }
    }
}
