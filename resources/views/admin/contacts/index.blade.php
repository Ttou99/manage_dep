@extends('admin.layouts.master')

@section('title')
    Contacts
@stop

@section('css')

@endsection

@section('content')

<div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Contacts</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Contacts</li>
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
    <h3 class="page-title">Contacts</h3>
    </div>
    </div>
    </div>

    <div class="table-responsive">
    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
    <thead class="student-thread">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Description</th>
    <th>Time</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
    <tr>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->phone }}</td>
    <td>{{ $contact->description }}</td>
    <td>{{ $contact->created_at }}</td>
    <td>
            <a class="btn btn-sm bg-warning-light me-2" data-bs-toggle="modal" data-bs-target="#DeleteContact{{ $contact->id }}"><i class="fa fa-trash"></i></a>
    </td>
    </tr>
    @include('admin.contacts.delete')
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
