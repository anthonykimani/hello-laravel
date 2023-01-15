<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $properties = [
            [
                'property_type' => 'bedsitter',
                'property_name' => 'faraja apartments',
                'price' => 12500,
                'location' => 'ruiru',
                'image' => 'https://i.postimg.cc/fb4Kz16V/bedroom.jpg',
                'property_description' => 'A quiet neighborhood in the surburbans outside the city'
            ],
            [
                'property_type' => 'apartment',
                'property_name' => 'Three Doors apartments',
                'price' => 36500,
                'location' => 'Donholm',
                'image' => 'https://i.postimg.cc/SxYdpmt0/apartments.jpg',
                'property_description' => 'A grand view of the city from the comfort of your home'
            ],
            [
                'property_type' => 'one_bedroom',
                'property_name' => 'highland apartments',
                'price' => 22500,
                'location' => 'Kilimani',
                'image' => 'https://i.postimg.cc/t496BpQt/roam-in-color-Rry-Fk4n-v-Os-unsplash.jpg',
                'property_description' => 'A fully decked out dining room for those family moments'
            ],
            [
                'property_type' => 'doubleroom',
                'property_name' => 'Boma estate',
                'price' => 43500,
                'location' => 'Nyayo',
                'image' => 'https://i.postimg.cc/3xkVL2JN/murat-demircan-Tv8-CFQvq7-Xo-unsplash.jpg',
                'property_description' => 'A Front porch in the summer for some barbeque'
            ],
            [
                'property_type' => 'singleroom',
                'property_name' => 'Riverside',
                'price' => 7500,
                'location' => 'ruaka',
                'image' => 'https://i.postimg.cc/3JTbXzzL/nathan-van-egmond-9-LMRQd-Vv7hw-unsplash.jpg',
                'property_description' => 'Start out with the essential comforts'
            ],
            [
                'property_type' => 'two_bedroom',
                'property_name' => 'Vanity Homes',
                'price' => 10500,
                'location' => 'kitengela',
                'image' => 'https://i.postimg.cc/3r9nXSDq/burners.jpg',
                'property_description' => 'Expressed design in architecture'
            ]
            
        ];

        DB::table('properties')->insert($properties);
    }
}
