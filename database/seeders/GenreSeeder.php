<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genres = [
            [
                'id'=>'1',
                'name'=>'Romance'
            ],
            [
                'id'=>'2',
                'name'=>'Action'
            ],
            [
                'id'=>'3',
                'name'=>'Cartoon'
            ]
        ];
        DB::table('genres')->insert($genres);
    }
}
