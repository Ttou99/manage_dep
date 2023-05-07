@extends('admin.layouts.master')
@section('css')
@endsection


@section('title')
    Groups List
@stop

@section('content')


    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Groups</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Groups</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Groups</h3>
                            </div>
                            <div class="col-auto text-end float-end ms-auto download-grp">

                                <a href="{{route('groupes.create')}}" class="btn btn-primary"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table
                            class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                            <thead class="student-thread">
                            <tr>

                                <th>ID</th>
                                <th>Section</th>
                                <th>Groupe </th>
                                <th>Sous Groupe </th>
                                <th>No Groupe </th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($n_groupes as $n_groupe)
                                <tr>
                                        <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $n_groupe->section->name }}</td>
                                    <td>{{ $n_groupe->groupe->name_groupe }}</td>
                                    <td>
                                        @if($n_groupe->sous_groupe == 0) Sous Groupe 01
                                        @else Sous Groupe 02
                                        @endif
                                    </td>
                                    <td>{{ $n_groupe->name_n_groupe }}</td>
                                    <td class="text-end">
                                        <div class="actions">
                                            <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                <i class="feather-eye"></i>
                                            </a>
                                            <a href="{{ route('groupes.edit',$n_groupe->id) }}" class="btn btn-sm bg-danger-light">
                                                <i class="feather-edit"></i>
                                            </a>&nbsp;&nbsp;
                                            <form action="{{ route('groupes.destroy',$n_groupe->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm bg-success-light me-2"><i class="feather-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')
@endsection
