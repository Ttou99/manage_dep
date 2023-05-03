<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teachers')->delete();
        $teachers = new Teacher();
        $teachers->name = ' محمد كمال';
        $teachers->email = 'kamel28@gmail.com';
        $teachers->password = Hash::make('1');
        $teachers->address = 'المسيلة';
        $teachers->phone = '0777777777';
        $teachers->joining_date = date("Y-m-d h:i:s");
        $teachers->gender_id = 1;
        $teachers->save();
    }
}
