<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $movies = [
            [
                'genre_id'=>'1',
                'title'=>'La La Land',
                'photo'=>'lalaLand.jpg',
                'publish_date'=> '2016-11-29',
                'description'=> 'Mia and Sebastian pursue dreams but face love and career conflicts.'
            ],
            [
                'genre_id'=>'2',
                'title'=>'Fight Club',
                'photo'=>'FightClub.jpg',
                'publish_date'=> '1999-10-15',
                'description'=> 'An insomniac and a soap salesman start fight clubs, sparking chaos.'
            ],
            [
                'genre_id'=>'3',
                'title'=>'Spider-Man: Into the Spider-Verse',
                'photo'=>'SpiderManIntotheSpiderVerse.jpg',
                'publish_date'=> '2018-12-06',
                'description'=> 'Miles Morales gains powers and faces challenges across the Spider-Verse.'
            ],
            [
                'genre_id'=>'1',
                'title'=>'(500) Days of Summer',
                'photo'=>'lalaLand.jpg',
                'publish_date'=> '2009-7-17',
                'description'=> 'Tom reflects on his 500 days with Summer after she dumps him, trying to 
                understand what went wrong and rediscovering his true passions.'
            ],
            [
                'genre_id'=>'2',
                'title'=>'John Wick: Chapter 4',
                'photo'=>'JohnWick_Chapter4.jpg',
                'publish_date'=> '2023-03-22',
                'description'=> 'John Wick, with a growing bounty on his head, discovers a way to defeat The High Table, 
                but faces a new enemy and betrayal from old allies.'
            ],
            [
                'genre_id'=>'3',
                'title'=>'Ice Age: Dawn of the Dinosaurs',
                'photo'=>'SpiderManIntotheSpiderVerse.jpg',
                'publish_date'=> '2009-06-26',
                'description'=> 'Manny, Sid, and Diego encounter dinosaurs as new, unfriendly neighbors, changing 
                their lives in unexpected ways.'
            ],
            [
                'genre_id'=>'2',
                'title'=>'Jake Paul vs. Mike Tyson',
                'photo'=>'SpiderManIntotheSpiderVerse.jpg',
                'publish_date'=> '2024-11-15',
                'description'=> 'Jake Paul faces Mike Tyson in a high-stakes match, while Katie Taylor 
                defends her undisputed title against Amanda Serrano in a historic rematch.'
            ]
        ];
        DB::table('movies')->insert($movies);
    }
}
