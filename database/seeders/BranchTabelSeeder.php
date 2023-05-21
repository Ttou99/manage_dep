<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->delete();

        Branch::create([
            'name_branch' => 'Ingénierie des Systèmes d Information et du Logiciel (ISIL)',
            'academicyear_id' => 3,
        ]);
        Branch::create([
            'name_branch' => 'Systèmes Informatiques (SI)',
            'academicyear_id' => 3,

        ]);
        Branch::create([
            'name_branch' => 'M1 IDO ',
            'academicyear_id' => 4,

        ]);
        Branch::create([
            'name_branch' => 'M1 RTIC ',
            'academicyear_id' => 4,

        ]);
        Branch::create([
            'name_branch' => 'M1 SIGL ',
            'academicyear_id' => 4,

        ]);
        Branch::create([
            'name_branch' => 'M1 IA ',
            'academicyear_id' => 4,

        ]);
        Branch::create([
            'name_branch' => 'M2 IDO ',
            'academicyear_id' => 5,

        ]);
        Branch::create([
            'name_branch' => 'M2 RTIC ',
            'academicyear_id' => 5,

        ]);
        Branch::create([
            'name_branch' => 'M2 SIGL',
            'academicyear_id' => 5,

        ]);
        Branch::create([
            'name_branch' => 'M2 IA ',
            'academicyear_id' => 5,

        ]);


    }
}
