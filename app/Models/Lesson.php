<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public const WEEK_DAYS = [
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
        '7' => 'Sunday',
    ];

    protected $fillable = [
        'start_date',
        'end_date',
        'comments',
        'user_id',
        'teacher_id',
        'room_id',
        'subject_id',
        'group_id'
    ];

    protected $appends = ['title', 'group_and_room', 'difference'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function getTitleAttribute()
    {
        return $this->subject()->first()->name_subject;
    }

    public function getGroupAndRoomAttribute()
    {
        return $this->group()->first()->name_groupe . ' - ' . $this->room()->first()->room_number;
    }

    public function getDifferenceAttribute()
    {
        return Carbon::parse($this->end_time)->diffInMinutes($this->start_time);
    }

}
