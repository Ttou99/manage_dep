@extends('admin.layouts.master')

@section('css')
@endsection

@section('title')
    Room Edit
@stop

@section('content')


            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Room Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('rooms.index')}}">Rooms</a></li>
                            <li class="breadcrumb-item active">Room Edit</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="{{ route('rooms.update','test') }}"  autocomplete="off">
                                    @csrf
                                    {{ method_field('PATCH') }}
                                    <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Room Information</span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Room Type <span class="login-danger">*</span></label>
                                            <input type="hidden" value="{{ $rooms->id }}" name="id">

                                            <select  name="roomtype_id" class="form-control select">
                                                <option value="" selected disabled>Select Room Type</option>
                                                @foreach ($roomtypes as $roomtype)
                                                    <option value="{{ $roomtype->id }}"{{ $rooms->roomtype_id == $roomtype->id ? 'selected' : '' }}> {{ $roomtype->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Room No <span class="login-danger">*</span></label>
                                            <input type="text" name="roomno" class="form-control" value="{{ $rooms->roomno  }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>



@endsection


@section('scripts')
@endsection
