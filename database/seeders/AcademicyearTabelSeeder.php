<?php

namespace Database\Seeders;

use App\Models\Academicyear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicyearTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('academicyears')->delete();

        DB::table('academicyears')->insert ([

            [
                'name' => '1ère année informatique',
            ],
            [
                'name' => '2ème année informatique',
            ],
            [
                'name' => '3ème année informatique',
            ],
            [
                'name' => '1ère année Master',
            ],
            [
                'name' => '2ème année Master',
            ],


        ]);

    }
}
