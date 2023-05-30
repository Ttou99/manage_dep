<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomtypes = Roomtype::all();
        return view('admin.rooms.create', compact('roomtypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $rooms = new Room();
            $rooms->roomtype_id = $request->roomtype_id;
            $rooms->room_number = $request->room_number;
            $rooms->save();

            return redirect()->route('rooms.index');



        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
         * Display the specified resource.
         */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roomtypes = Roomtype::all();
        $rooms =  Room::findOrFail($id);
        return view('admin.rooms.edit', compact('rooms', 'roomtypes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $rooms = Room::findorfail($request->id);
            $rooms->room_number = $request->room_number;
            $rooms->roomtype_id = $request->roomtype_id;
            $rooms->save();
            return redirect()->route('rooms.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
