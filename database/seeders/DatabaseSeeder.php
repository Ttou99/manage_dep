<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Teacher;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(GenderTabelSeeder::class);
        $this->call(TeacherTabelSeeder::class);
        Teacher::factory(11)->create();
        $this->call(RoomtypeTabelSeeder::class);
        $this->call(RoomTabelSeeder::class);
        $this->call(AcademicyearTabelSeeder::class);
        $this->call(BranchTabelSeeder::class);
        $this->call(SubjectTabelSeeder::class);
        Setting::factory(1)->create();
        Contact::factory(20)->create();
    }
}
