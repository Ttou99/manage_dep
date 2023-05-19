<div class="header">

    <div class="header-left">
        <a href="{{ route('teacher.dashboard') }}" class="logo">
            <img src="{{ URL::asset('admin_dashboard/assets/img/logo.png') }}" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="{{ URL::asset('admin_dashboard/assets/img/logo-small.png') }}" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                <img class="rounded-circle" alt="User Image" src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/img/profiles/'.$profileData->photo) : url('admin_dashboard/assets/img/profiles/avatar-03.jpg') }}">

                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">Teacher</p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                    <img class="rounded-circle" alt="User Image" src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/img/profiles/'.$profileData->photo) : url('admin_dashboard/assets/img/profiles/avatar-03.jpg') }}">

                    </div>
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">Teacher</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('teacher.logout') }}">Logout</a>
            </div>
        </li>

    </ul>

</div>
