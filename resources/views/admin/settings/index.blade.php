@extends('admin.layouts.master')

@section('title')
    Settings
@stop

@section('css')
@endsection

@section('content')
<div class="page-header">
    <div class="row align-items-center">
    <div class="col">
    <h3 class="page-title">Settings</h3>
    <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Settings</li>
    </ul>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-body">
    <form action="{{ route('settings.update','test') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($settings as $setting)
    <div class="row">
    <div class="col-12">
    <h5 class="form-title"><span>Settings</span></h5>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <input type="hidden" value="{{ $setting->id }}" name="id">
    <label>Company Title <span class="login-danger">*</span></label>
    <input type="text" name="title" value="{{ $setting->title }}" required class="form-control" placeholder="Company Title">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Company Name <span class="login-danger">*</span></label>
    <input type="text" name="name" value="{{ $setting->name }}" required class="form-control" placeholder="Company Name">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Company Email <span class="login-danger">*</span></label>
    <input type="email" name="email" value="{{ $setting->email }}" required class="form-control" placeholder="Enter Email">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <input type="hidden" value="{{ $setting->id }}" name="id">
    <label>Company Country <span class="login-danger">*</span></label>
    <input type="text" name="country" value="{{ $setting->country }}" required class="form-control" placeholder="Company Country">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Company City <span class="login-danger">*</span></label>
    <input type="text" name="city" value="{{ $setting->city }}" required class="form-control" placeholder="Company City">
    </div>
    </div>
    <div class="col-12 col-sm-4">
    <div class="form-group local-forms">
    <label>Company Address <span class="login-danger">*</span></label>
    <input type="text" name="address" value="{{ $setting->address }}" required class="form-control" placeholder="Enter Address">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Phone <span class="login-danger">*</span></label>
    <input type="text" name="phone" value="{{ $setting->phone }}" required class="form-control" placeholder="Company Phone">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Mobile <span class="login-danger">*</span></label>
    <input type="text" name="mobile" value="{{ $setting->mobile }}" required class="form-control" placeholder="Company Mobile">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Url Facebook <span class="login-danger">*</span></label>
    <input type="text" name="link_facebook" value="{{ $setting->link_facebook }}" required class="form-control" placeholder="Company Url Facebook">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Url Linkedin <span class="login-danger">*</span></label>
    <input type="text" name="link_linkedin" value="{{ $setting->link_linkedin }}" required class="form-control" placeholder="Company Url Linkedin">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Url Github <span class="login-danger">*</span></label>
    <input type="text" name="link_github" value="{{ $setting->link_github }}" required class="form-control" placeholder="Company Url Github">
    </div>
    </div>
    <div class="col-12 col-sm-6">
    <div class="form-group local-forms">
    <label>Company Url Twitter <span class="login-danger">*</span></label>
    <input type="text" name="link_twitter" value="{{ $setting->link_twitter }}" required class="form-control" placeholder="Company Url Twitter">
    </div>
    </div>
    <div class="col-12 col-sm-12">
    <div class="form-group local-forms">
    <label>Description <span class="login-danger">*</span></label>
    <textarea name="description" class="form-control" rows="4" cols="50">{{ $setting->description }}</textarea>
    </div>
    </div>
    <div class="col-12 col-sm-12">
    <div class="form-group local-forms">
    <input type="file" id="image" accept="image/*" name="settings_images"><br>
    <img class="img-thumbnail image-preview" src="{{ URL::asset('attachments/settings_images/'.$setting->settings_images) }}" id="showImage" type="image/*" style="width: 10%;heghit: 10%"><br>
    </div>
    </div>


    <div class="col-12">
    <div class="student-submit">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>
    @endforeach
    </form>
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
