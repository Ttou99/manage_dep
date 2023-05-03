@extends('admin.layouts.master')

@section('title')
    Dashboard
@stop

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-sub-header">
                <h3 class="page-title">Welcome {{ Auth::user()->name }} !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Teachers</h6>
                        <h3>50055</h3>
                    </div>
                    <div class="db-icon">
                        <img src="{{ URL::asset('admin_dashboard/assets/img/icons/dash-icon-01.svg') }}" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Awards</h6>
                        <h3>50+</h3>
                    </div>
                    <div class="db-icon">
                        <img src="{{ URL::asset('admin_dashboard/assets/img/icons/dash-icon-02.svg')}}" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
            <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                    <div class="db-info">
                        <h6>Department</h6>
                        <h3>30+</h3>
                    </div>
                    <div class="db-icon">
                        <img src="{{ URL::asset('admin_dashboard/assets/img/icons/dash-icon-03.svg')}}" alt="Dashboard Icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-md-12 col-lg-6">

        <div class="card card-chart">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="card-title">Overview</h5>
                    </div>
                    <div class="col-6">
                        <ul class="chart-list-out">
                            <li><span class="circle-blue"></span>Teacher</li>
                            <li><span class="circle-green"></span>Student</li>
                            <li class="star-menus"><a href="javascript:;"><i
                                        class="fas fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="apexcharts-area"></div>
            </div>
        </div>

    </div>
    <div class="col-md-12 col-lg-6">

        <div class="card card-chart">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="card-title">Number of Teachers</h5>
                    </div>
                    <div class="col-6">
                        <ul class="chart-list-out">
                            <li><span class="circle-blue"></span>Girls</li>
                            <li><span class="circle-green"></span>Boys</li>
                            <li class="star-menus"><a href="javascript:;"><i
                                        class="fas fa-ellipsis-v"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="bar"></div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xl-6 d-flex">

        <div class="card flex-fill student-space comman-shadow">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title">Star Teachers</h5>
                <ul class="chart-list-out student-ellips">
                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table
                        class="table star-student table-hover table-center table-borderless table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th class="text-center">Percentage</th>
                                <th class="text-end">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{ URL::asset('admin_dashboard/assets/img/profiles/avatar-02.jpg')}}" width="25"
                                            alt="Star Students">
                                        John Smith
                                    </a>
                                </td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2019</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1245</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{ URL::asset('admin_dashboard/assets/img/profiles/avatar-01.jpg')}}" width="25"
                                            alt="Star Students">
                                        Jolie Hoskins
                                    </a>
                                </td>
                                <td class="text-center">99.5%</td>
                                <td class="text-end">
                                    <div>2018</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE1625</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{ URL::asset('admin_dashboard/assets/img/profiles/avatar-03.jpg')}}" width="25"
                                            alt="Star Students">
                                        Pennington Joy
                                    </a>
                                </td>
                                <td class="text-center">99.6%</td>
                                <td class="text-end">
                                    <div>2017</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2516</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{ URL::asset('admin_dashboard/assets/img/profiles/avatar-04.jpg')}}" width="25"
                                            alt="Star Students">
                                        Millie Marsden
                                    </a>
                                </td>
                                <td class="text-center">98.2%</td>
                                <td class="text-end">
                                    <div>2016</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-nowrap">
                                    <div>PRE2209</div>
                                </td>
                                <td class="text-nowrap">
                                    <a href="profile.html">
                                        <img class="rounded-circle"
                                            src="{{ URL::asset('admin_dashboard/assets/img/profiles/avatar-05.jpg')}}" width="25"
                                            alt="Star Students">
                                        John Smith
                                    </a>
                                </td>
                                <td class="text-center">98%</td>
                                <td class="text-end">
                                    <div>2015</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill fb sm-box">
            <div class="social-likes">
                <p>Like us on facebook</p>
                <h6>50,095</h6>
            </div>
            <div class="social-boxs">
                <img src="{{ URL::asset('admin_dashboard/assets/img/icons/social-icon-01.svg')}}" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill twitter sm-box">
            <div class="social-likes">
                <p>Follow us on twitter</p>
                <h6>48,596</h6>
            </div>
            <div class="social-boxs">
                <img src="{{ URL::asset('admin_dashboard/assets/img/icons/social-icon-02.svg')}}" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill insta sm-box">
            <div class="social-likes">
                <p>Follow us on instagram</p>
                <h6>52,085</h6>
            </div>
            <div class="social-boxs">
                <img src="{{ URL::asset('admin_dashboard/assets/img/icons/social-icon-03.svg')}}" alt="Social Icon">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card flex-fill linkedin sm-box">
            <div class="social-likes">
                <p>Follow us on linkedin</p>
                <h6>69,050</h6>
            </div>
            <div class="social-boxs">
                <img src="{{ URL::asset('admin_dashboard/assets/img/icons/social-icon-04.svg')}}" alt="Social Icon">
            </div>
        </div>
    </div>
</div>
@endsection

