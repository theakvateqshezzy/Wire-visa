<?php

namespace Database\Seeders;

use App\Models\VisaType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisaTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisaType::create([
            'name' => 'Type1'
        ]);
    }
}