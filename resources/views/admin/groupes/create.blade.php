@extends('admin.layouts.master')

@section('css')
@endsection

@section('title')
    Group Add
@stop

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Add Groupe</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('groupes.index') }}">Groupes</a></li>
                    <li class="breadcrumb-item active">Add Groupe</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('groupes.store') }}" class="form-accountant"  autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Basic Details</span></h5>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Section <span class="login-danger">*</span></label>
                                    <select  name="section_id" class="form-control select" onclick="console.log($(this).val())"
                                             onchange="console.log('change is firing')">
                                        <option value="" selected disabled>Select Section</option>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}"> {{ $section->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>No Groupe <span class="login-danger">*</span></label>
                                    <input type="text" name="name_n_groupe" class="form-control" placeholder="Enter No Of Groupe">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Sous Groupe <span class="login-danger">*</span></label>
                                    <select name="sous_groupe" class="form-control select">
                                        <option value="" selected disabled>Select Sous Groupe</option>
                                        <option value="0">Sous Groupe 01</option>
                                        <option value="1">Sous Groupe 02</option>
                                    </select>
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
    <script>
        $(document).ready(function () {
            $('select[name="section_id"]').on('change', function () {
                var section_id = $(this).val();
                if (section_id) {
                    $.ajax({
                        url: "{{ URL::to('admin/section') }}/" + section_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="groupe_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="groupe_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
