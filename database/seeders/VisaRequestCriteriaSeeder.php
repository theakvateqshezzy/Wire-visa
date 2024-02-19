<?php

namespace Database\Seeders;

use App\Models\VisaRequestCriteria;
use App\Models\VisaRequestCriteriaDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisaRequestCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria = VisaRequestCriteria::create([
            'nationality_country_id' => 1,
            'from_city_id' => 1,
            'to_city_id' => 1,
            'visa_type_id' => 1,
            'length_start' => 1,
            'length_end' => 24
        ]);

        $criteria->documents()->createMany([
            [
                'name' => "Passport Picture",
                'description' => "Something of image details",
                'is_optional' => false,
                'file_id' => 1,
            ],
            [
                'name' => "Academic Document",
                'description' => "Something of image details",
                'is_optional' => false,
                'file_id' => 1,
            ]
        ]);
    }
}