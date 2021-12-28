<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sortownie;

class trasySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trasy = [
            [
                'name' => 'krak',
                'city' => 'Kraków',
                'region' => 'małopolska'
            ],
            [
                'name' => 'kato',
                'city' => 'Katowice',
                'region' => 'górny śląsk'
            ],
            [
                'name' => 'rzesz',
                'city' => 'Rzeszów',
                'region' => 'podkarpacie'
            ],
            [
                'name' => 'wroc',
                'city' => 'Wrocław',
                'region' => 'dolny śląsk'
            ],
            [
                'name' => 'bydgo',
                'city' => 'Bydgoszcz',
                'region' => 'kujawsko-pomorskie'
            ],
            [
                'name' => 'lub',
                'city' => 'Lublin',
                'region' => 'lubelskie'
            ],
            [
                'name' => 'ziel',
                'city' => 'Zielona Góra',
                'region' => 'lubuski'
            ],
            [
                'name' => 'lod',
                'city' => 'Łódź',
                'region' => 'łódzkie'
            ],
            [
                'name' => 'rzesz',
                'city' => 'Rzeszów',
                'region' => 'podkarpacie'
            ],
            [
                'name' => 'wars',
                'city' => 'Warszawa',
                'region' => 'mazowieckie'
            ],
            [
                'name' => 'opo',
                'city' => 'Opole',
                'region' => 'opolskie'
            ],
            [
                'name' => 'bial',
                'city' => 'Białystok',
                'region' => 'podlaskie'
            ],
            [
                'name' => 'kiel',
                'city' => 'Kielce',
                'region' => 'świętokrzyskie'
            ],
            [
                'name' => 'gdan',
                'city' => 'Gdańsk',
                'region' => 'pomorskie'
            ],
            [
                'name' => 'poz',
                'city' => 'Poznań',
                'region' => 'wielkopolskie'
            ],
            [
                'name' => 'olsz',
                'city' => 'Olsztyn',
                'region' => 'warmińsko-mazurskie'
            ],
            [
                'name' => 'szcze',
                'city' => 'Szczecin',
                'region' => 'zachodniopomorskie'
            ],
        ];

        foreach ($trasy as $value){
            sortownie::create([
                'nazwa_sortowni' => $value['name'],
                'miasto' => $value['city'],
                'ulica' => 'krakowska',
                'numer' => '12',
                'województwo' => $value['region'],
            ]);
        }
    }
}
