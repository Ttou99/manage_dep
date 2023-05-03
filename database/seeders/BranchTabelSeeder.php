<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::create([
            'name_branch' => 'Ingénierie des Systèmes d Information et du Logiciel (ISIL)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,
        ]);
        Branch::create([
            'name_branch' => 'Systèmes Informatiques (SI)',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M1 IDO ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M1 RTIC ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M1 SIGL ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M1 IA ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M2 IDO ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M2 RTIC ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M2 SIGL',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);
        Branch::create([
            'name_branch' => 'M2 IA ',
            'academicyear_id' => Academicyear::all()->unique()->random()->id,

        ]);


    }
}
