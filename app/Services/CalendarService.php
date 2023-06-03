<?php

namespace App\Services;

use App\Models\Lesson;

class CalendarService
{
    public function generateCalendarData($weekDays)
    {
        $calendarData = [];
        $timeService = new TimeService();

        $timeRange = $timeService->generateTimeRange(config('app.calendar.start_time'), config('app.calendar.end_time'));

        $lessons   = Lesson::all();

        foreach ($timeRange as $time) {
            $timeText = $time['start'] . ' - ' . $time['end'];
            $calendarData[$timeText] = [];
            
            $timeLessons = $lessons->where('start_time', $time['start'])->where('end_time', $time['end']);

            foreach ($weekDays as $index => $day) {

                $dayTimeLessons = $timeLessons->where('weekday', $index);

                $data = [];
                foreach ($dayTimeLessons as $lesson) {
                    array_push($data, [
                        'class_name'   => $lesson->title,
                        'group_and_room' => $lesson->group_and_room,
                        'teacher_name' => $lesson->teacher->name,
                        'rowspan'      => $lesson->difference/30 ?? ''
                    ]);
                }
                $calendarData[$timeText][$index] = $data;
            }
        }

        return $calendarData;
    }
}
