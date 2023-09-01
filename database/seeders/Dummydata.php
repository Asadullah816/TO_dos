<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goal;


class Dummydata extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Goal::create([
            'task'=>'To complete the project',
            'pri'=>'High Priority',
        ]);
    }
}
