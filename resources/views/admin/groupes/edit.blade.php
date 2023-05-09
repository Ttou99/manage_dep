@extends('admin.layouts.master')

@section('title')
    Group Edit
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
                <h3 class="page-title">Edit Group</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('groupes.index') }}">Groups</a></li>
                    <li class="breadcrumb-item active">Edit Group</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('groupes.update','test') }}"  autocomplete="off">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Basic Details</span></h5>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Sections <span class="login-danger">*</span></label>
                                    <input type="hidden" value="{{ $n_groupes->id }}" name="id">
                                    <select  name="section_id" class="form-control select">
                                        <option value="" selected disabled>Select Section</option>
                                        @foreach($sections as $section)
                                            <option value="{{ $section->id }}" {{ $section->id == $n_groupes->section_id ? 'selected' : ""}}>{{ $section->name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>No Group <span class="login-danger">*</span></label>
                                    <input type="text" value="{{ $n_groupes->name_n_groupe  }}" name="name_n_groupe" class="form-control" >
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="form-group local-forms">
                                    <label>Sous Groupe <span class="login-danger">*</span></label>
                                    <select  name="semestre" id="semestre" class="form-control select">
                                        <option value="{{ $n_groupes->sous_groupe }}" selected disabled>{{ $n_groupes->sous_groupe }}</option>
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

@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('select[name="sectin_id"]').on('change', function () {
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
