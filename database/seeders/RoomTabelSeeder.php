<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = new Room();
        $rooms->room_number = 3;
        $rooms->roomtype_id = 1;
        $rooms->save();
    }
}
