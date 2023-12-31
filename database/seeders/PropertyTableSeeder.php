<?php

namespace Database\Seeders;

use App\Models\MultiImage;
use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'ptype_id' => '1',
            'amenities_id' => '1',
            'property_name' => 'Rahman Villa',
            'property_slug' => 'rahman-villa',
            'property_code' => '753951',
            'property_status' => 'rent',
            'lowest_price' => '500',
            'maximum_price' => '50000',
            'property_thumbnail' => 'img here',
            'short_description' => 'Lorem short desc ipsum dolor sit amet consectetur adipisicing sed.',
            'long_description' => 'This is long description',
            'bedrooms' => '4',
            'bathrooms' => '4',
            'garage' => '1',
            'garage_size' => '500',
            'property_size' => '1800',
            'property_video' => 'link here',
            'address' => '298, Nagua',
            'city' => 'Kishoreganj',
            'state' => 'Dhaka',
            'postal_code' => '2300',
            'neighborhood' => 'Haybatnagar',
            'latitude' => '3651.79512.63214',
            'longitude' => '9452.45845.5491',
            'featured' => '1',
            'hot' => '1',
            'agent_id' => '2',
            'status' => 1,
        ]);

        MultiImage::create([
            'property_id' => '1',
            'photo_name' => 'zzz,xxx,yyy',
        ]);
    }
}
