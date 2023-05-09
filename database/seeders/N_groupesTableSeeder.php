<?php

namespace Database\Seeders;

use App\Models\Groupe;
use App\Models\N_groupe;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class N_groupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            $n_groupes = new N_groupe();
            $n_groupes->name_n_groupe = 'A1';
            $n_groupes->sous_groupe = 0;
            $n_groupes->section_id = Section::all()->unique()->random()->id;
            $n_groupes->save();
    }

}
