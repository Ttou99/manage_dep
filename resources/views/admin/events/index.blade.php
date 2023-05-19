@extends('admin.layouts.master')
@section('css')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}

@endsection


@section('title')
    Time Table
@stop

@section('content')


    <div class="page-header">
        <h3 class="page-title">Time Table</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
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

                                <a href="{{ route('groupes.create') }}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="eventModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Event: <span class="event-time"></span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group local-forms">
                                <label for="subject">Subject</label>
                                <select name="subject" class="form-control select" id="subject">
                                    <option value="0">Select</option>
                                    @foreach ($subjects as $subject)
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
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}"> {{ $room->roomno }}</option>
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
                                    @foreach ($teahcers as $teacher)
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
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}"> {{ $group->name_groupe }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group local-forms">
                                <label for="startTime">Start Time</label>
                                <input type="time" class="form-control" id="startTime" placeholder="Start time">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group local-forms">
                                <label for="endTime">End Time</label>
                                <input type="time" class="form-control" id="endTime" placeholder="End time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    {{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script> --}}

    <script>
        $(document).ready(function() {
            let events = @json($events);

            let calendar = $('#calendar');
            // $('#calendar').fullCalendar({});

            calendar.fullCalendar({
                header: {
                    left: 'month,agendaWeek,agendaDay',
                    center: 'title',
                    // right: null
                },
                // defaultView: 'agendaWeek',
                events: events,
                selectable: true,
                selectHelper: true,
                select: (start, end, allDays) => {
                    createEvent(start, end, allDays)
                },

                // eventLimit: true,
                // fixedWeekCount: false,
                // eventClick: function(info) {
                //     alert('Event: ' + info.title);
                //     alert('test: ' + JSON.stringify(info));
                //     alert('Coordinates: ' + info.pageX + ',' + info.pageY);
                //     alert('View: ' + info.type);

                //     // change the border color just for fun
                //     // info.el.style.borderColor = 'red';

                // }
                /* ,
                                dayClick: function(date, jsEvent, view) {

                                    alert('Clicked on: ' + date.format());

                                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                                    alert('Current view: ' + view.name);

                                    // change the day's background color just for fun
                                    $(this).css('background-color', 'red');
                                } */
            });

            createEvent = (start, end, allDays) => {
                let eventModal = $('#eventModal');

                let formatedDate = moment(start).format('YYYY-MM-DD');
                eventModal.find('.event-time').text(formatedDate);
                eventModal.modal('toggle');
            }

            // calendar.fullCalendar('renderEvent', {
            //     'id': 1,
            //     'title': 'Test hello 2',
            //     'start': '2023-05-13T13:15:30Z',
            //     'end': '2023-05-13T13:30:00Z'
            // });

            // var calendarEl = $('#calendar');
            // calendarEl.fullCalendar({
            //     initialView: 'dayGridMonth'
            // });

            // var calendarEl = document.getElementById('calendar');

            // var calendar = new FullCalendar.Calendar(calendarEl, {
            //     header: {
            //         left: 'year,month,agendaWeek',
            //         center: 'prev,title,next',
            //         right: null
            //     },
            //     selectable: true,
            //     initialView: 'dayGridMonth'

            // });

            // calendar.render()

            // calendar.('renderEvent', {
            //     'id': 1,
            //     'title': 'Test hello 2',
            //     'start': '2023-05-13T13:15:30Z',
            //     'end': '2023-05-13T13:30:00Z'
            // });
        });
    </script>
@endsection
