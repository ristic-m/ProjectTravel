<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'continent_id' => '2',
            'name' => 'Japan',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/DALEKE%20DESTINACIJE/Azija/Japan/Baner/japan%20baner.jpg'
        ]);

        Destination::create([
            'continent_id' => '2',
            'name' => 'China',
            'imgUrl' => 'https://images.unsplash.com/photo-1547981609-4b6bfe67ca0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2940&q=80'
        ]);

        Destination::create([
           'continent_id' => '2',
           'name' => 'Vietnam',
           'imgUrl' => 'https://www.jungletribe.rs/files/images/krisztian-tabori-9r2yeRccyls-unsplash.jpg'
        ]);

        Destination::create([
            'continent_id' => '1',
            'name' => 'Portugal',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/individualna%20banar%20(4).png'
        ]);

        Destination::create([
            'continent_id' => '1',
            'name' => 'Spain',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/Evropa/%C5%A0panija/Majorka/baner/beach-2100369_1280.jpg'
        ]);

        Destination::create([
            'continent_id' => '1',
            'name' => 'Greece',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/Evropa/Gr%C4%8Dka/Rodos%20sub/baner/lindos-94852_1280(1).jpg'
        ]);

        Destination::create([
            'continent_id' => '3',
            'name' => 'Zanzibar',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/CANVA/BANERI/ZANZIBAR/ZANZIBAR-AKCIJA-BANNER.jpg'
        ]);

        Destination::create([
            'continent_id' => '3',
            'name' => 'Mauritius',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/DALEKE%20DESTINACIJE/Afrika/Mauricijus/baner%20NG/MRU%20baner.jpg'
        ]);

        Destination::create([
            'continent_id' => '3',
            'name' => 'Seychelles',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/CANVA/BANERI/SEJSELI/SEYCHELLES%20SEJSELI%20BANNER.jpg'
        ]);

        Destination::create([
            'continent_id' => '4',
            'name' => 'Peru',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/Evropa/Portugalija/Baneri/peru%20baner.jpg'
        ]);

        Destination::create([
            'continent_id' => '4',
            'name' => 'Chile',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/DALEKE%20DESTINACIJE/Južna%20Amerika/Čile/chile-g6cd07c944_1280.jpg'
        ]);

        Destination::create([
            'continent_id' => '4',
            'name' => 'Brazil',
            'imgUrl' => 'https://www.jungletribe.rs/files/images/DALEKE%20DESTINACIJE/Ju%C5%BEna%20Amerika/Brazil/rio-de-janeiro-1963744_960_720.jpg'
        ]);

    }
}
