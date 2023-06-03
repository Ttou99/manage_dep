@extends('admin.layouts.master')

@section('css')
@endsection

@section('title')
    Teachers List
@stop


@section('content')

    <div class="page-header">
        <h3 class="page-title">Time Table</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Time Table</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Time Table</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">
                                <button id="addLesson" class="btn btn-primary" data-toggle="modal"
                                    data-target="#lessonModal"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th width="125">Time</th>
                                    @foreach ($weekDays as $day)
                                        <th>{{ $day }}</th>
                                    @endforeach
                                </thead>
                                <tbody>
                                    @foreach ($calendarData as $time => $days)
                                        <tr>
                                            <td>
                                                {{ $time }}
                                            </td>
                                            @foreach ($days as $day => $lessons)
                                                <td>
                                                    @foreach ($lessons as $lesson)
                                                        <div class="align-middle text-center mb-2"
                                                            style="background-color:#f0f0f0; border-width: 2px;">
                                                            {{ $lesson['group_and_room'] }} /
                                                            {{ $lesson['class_name'] }}<br>
                                                            Teacher: {{ $lesson['teacher_name'] }}
                                                        </div>
                                                    @endforeach
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="lessonModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Event: <span class="event-time"></span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="lessonForm" method="POST" action="{{ route('timetable.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="subject">Subject</label>
                                    <select name="subject" class="form-control select" id="subject">
                                        <option value="0">Select</option>
                                        @foreach ($data['subjects'] as $subject)
                                            <option value="{{ $subject->id }}"> {{ $subject->name_subject }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="room">Room</label>
                                    <select name="room" class="form-control select" id="room">
                                        <option value="0">Select</option>
                                        @foreach ($data['rooms'] as $room)
                                            <option value="{{ $room->id }}"> {{ $room->room_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="teacher">Teacher</label>
                                    <select name="teacher" class="form-control select" id="teacher">
                                        <option value="0">Select</option>
                                        @foreach ($data['teahcers'] as $teacher)
                                            <option value="{{ $teacher->id }}"> {{ $teacher->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="group">Group</label>
                                    <select name="group" class="form-control select" id="group">
                                        <option value="0">Select</option>
                                        @foreach ($data['groups'] as $group)
                                            <option value="{{ $group->id }}"> {{ $group->name_groupe }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="day">Day</label>
                                    <select class="form-control" id="day" name="day">
                                        <option value="0">Select</option>
                                        @foreach ($weekDays as $index => $day)
                                            <option value="{{ $index }}">{{ $day }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group local-forms">
                                    <label for="time">Time</label>
                                    <select class="form-control" id="time" name="time" required>
                                        <option value="0">Select</option>
                                        @foreach ($timeRange as $index => $time)
                                            <option value="{{ $time }}">{{ $time }}</option>
                                        @endforeach
                                    </select>
    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="saveLesson" type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            // $('select').select2();

            $('#addLesson').click(function() {
                $('#lessonModal').modal('toggle');
            });

            $('#saveLesson').click(function () {
                let lessonForm = $('#lessonForm');
                lessonForm.submit()
            })
        });
    </script>
@endsection
