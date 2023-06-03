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
                                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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

@endsection
