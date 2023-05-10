<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\N_groupe;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class N_groupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('n_groupes')->insert ([

            [
                'name_n_groupe' => 'Av1',
                'sous_groupe' => 1,
                'section_id' => 2,
            ]



        ]);

    }

}
