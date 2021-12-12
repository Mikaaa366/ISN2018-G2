<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cena;

class cenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cena = [
            [
                'type' => 'mała',
                'price' => '9.99'
            ],
            [
                'type' => 'średnia',
                'price' => '15.99'
            ],
            [
                'type' => 'duża',
                'price' => '20.99'
            ],
        ];

        foreach ($cena as $value){
            cena::create([
                'type' => $value['type'],
                'price' => $value['price']
            ]);
        }
    }
}
