<?php

namespace Database\Seeders;

use App\Models\RelationshipInterest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipInterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            ['id' => '1', 'name' => 'Serious Relationship', 'status' => true],
            ['id' => '2', 'name' => 'Casual Relationship', 'status' => true],
            ['id' => '3', 'name' => 'Study Mate', 'status' => true],
            ['id' => '4', 'name' => 'Platonic Relationship', 'status' => true],
        ];

        foreach($lists as $list){
            RelationshipInterest::create($list);
        }
    }
}
