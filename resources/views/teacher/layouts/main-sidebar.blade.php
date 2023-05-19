<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li><a href="{{ route('teacher.dashboard') }}"><i class="fas fa-holly-berry"></i> <span>Dashboard</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>

                </li>




                <li>
                    <a href="#"><i class="fas fa-calendar-day"></i> <span>Time Table </span></a>
                </li>
                <li><a href="{{ url('/admin/contacts') }}"><i class="fa fa-address-card"></i> <span>Contacts</span></a></li>
                <li><a href="{{ route('frontend.welcome') }}"><i class="fa fa-dashboard"></i> <span>Welcome</span></a></li>
            </ul>
        </div>
    </div>
</div>
