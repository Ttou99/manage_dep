@extends('admin.layouts.master')
@section('css')
@endsection


@section('title')
     Subjects List
@stop

@section('content')


            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Subjects</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Subjects</li>
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
                                        <h3 class="page-title">Subjects</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">

                                        <a href="{{route('subjects.create')}}" class="btn btn-primary"><i
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
                                        <th>Academic Year Name</th>
                                        <th>Branch Name </th>
                                        <th>Semestre </th>
                                        <th>Subject Name </th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0; ?>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                                <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            <td>{{ $subject->academicyear->name }}</td>
                                            <td>{{ $subject->branch->name_branch }}</td>
                                            <td>
                                                @if($subject->semestre == 0) Semestre 01
                                                @else Semestre 02
                                                @endif
                                            </td>
                                            <td>{{ $subject->name_subject }}</td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="javascript:;" class="btn btn-sm bg-success-light me-2">
                                                        <i class="feather-eye"></i>
                                                    </a>
                                                    <a href="{{ route('subjects.edit',$subject->id) }}" class="btn btn-sm bg-danger-light">
                                                        <i class="feather-edit"></i>
                                                    </a>&nbsp;&nbsp;
                                                    <form action="{{ route('subjects.destroy',$subject->id) }}" method="post">
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
            </div>


@endsection


@section('scripts')
@endsection
