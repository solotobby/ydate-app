<?php

namespace Database\Seeders;

use App\Models\Belief;
use App\Models\EducationBackground;
use App\Models\Ethinicity;
use App\Models\MaritalBackground;
use App\Models\ProfessionalBackground;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $educationalBrackground = [
            ['id'=>'1', 'name' => 'Primary'],
            ['id'=>'2', 'name' => 'High School Diploma'],
            ['id'=>'3', 'name' => 'Bachelors Degree'],
            ['id'=>'4', 'name' => 'Masters Degree'],
            ['id'=>'5', 'name' => 'Doctorate Degree'],
        ];

        $professionalBrackground = [
            ['id'=>'1', 'name' => 'Self Employed'],
            ['id'=>'2', 'name' => 'Unemployed'],
            ['id'=>'3', 'name' => 'Employed'],
            ['id'=>'4', 'name' => 'Student'],
        ];

        $maritalBrackground = [
            ['id'=>'1', 'name' => 'Never been Married'],
            ['id'=>'2', 'name' => 'Divorced'],
            ['id'=>'3', 'name' => 'Seperated'],
            ['id'=>'4', 'name' => 'Widower']
        ];

        $enthnicity = [
            ['id'=>'1', 'name' => 'White or Caucasian'],
            ['id'=>'2', 'name' => 'American'],
            ['id'=>'3', 'name' => 'Black American'],
            ['id'=>'4', 'name' => 'Black African'],
            ['id'=>'5', 'name' => 'Latino'],
        ];

        $belief = [
            ['id'=>'1', 'name' => 'Christian'],
            ['id'=>'2', 'name' => 'Catholic'],
            ['id'=>'3', 'name' => 'Muslim'],
            ['id'=>'4', 'name' => 'Jewish'],
            ['id'=>'5', 'name' => 'Budhist'],
            ['id'=>'6', 'name' => 'Agnostic'],
            ['id'=>'7', 'name' => 'Atheist'],
        ];

        foreach($educationalBrackground as $education){
            EducationBackground::create($education);
        }

        foreach($professionalBrackground as $profession){
            ProfessionalBackground::create($profession);
        }

        foreach($maritalBrackground as $marital){
            MaritalBackground::create($marital);
        }

        foreach($enthnicity as $ethnic){
            Ethinicity::create($ethnic);
        }

        foreach($belief as $be){
            Belief::create($be);
        }
    }
}
