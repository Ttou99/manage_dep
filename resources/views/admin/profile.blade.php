@extends('admin.layouts.master')

@section('title')
    Update Profile
@stop

@section('content')

<div class="page-header">
    <div class="row">
      <div class="col">
        <h3 class="page-title">Profile</h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile</li>
          </ul>
      </div>
    </div>
</div>

    <div class="row">
      <div class="col-md-12">
        <div class="profile-header">
          <div class="row align-items-center">
            <div class="col-auto profile-image">
              <img class="rounded-circle" alt="User Image" src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/img/profiles/'.$profileData->photo) : url('admin_dashboard/assets/img/profiles/avatar-03.jpg') }}">
            </div>
            <div class="col ms-md-n2 profile-user-info">
              <h4 class="user-name mb-0">{{ $profileData->name }}</h4>
              <h6 class="text-muted">{{ $profileData->email }}</h6>
            </div>
          </div>
        </div>
        <div class="profile-menu">
          <ul class="nav nav-tabs nav-tabs-solid">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a></li>
          </ul>
        </div>
        <div class="tab-content profile-tab-cont">
          <div class="tab-pane fade show active" id="per_details_tab">

    <div class="row">
      <div class="col-lg-9">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title d-flex justify-content-between"><span>Personal Details</span></h5>
            <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4 mb-3">
                <label>Name</label>
                <input type="text" class="form-control" value="{{ $profileData->name }}" placeholder="Name" name="name" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Email</label>
                <input type="email" class="form-control" value="{{ $profileData->email }}" placeholder="Email" name="email" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" value="{{ $profileData->phone }}" placeholder="Phone" name="phone" required>
            </div>
            <div class="col-md-12 mb-3">
                <label>Phone</label>
                <input type="file" name="photo" id="image">
            </div>
            </div>
            <div class="col-md-4 mb-3">
                <img class="img-thumbnail image-preview"  src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/img/profiles/'.$profileData->photo) : url('admin_dashboard/assets/img/profiles/avatar-03.jpg') }}" alt="Admin profile picture" id="showImage">
            </div>
            <div class="box-footer" style="text-align:center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    </div>
    </div>
    </div>
    </div>
@endsection


@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection


