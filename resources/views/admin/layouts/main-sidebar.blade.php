<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-holly-berry"></i> <span>Dashboard</span></a></li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('teachers.index')}}">Teacher List</a></li>
                        <li><a href="{{route('teachers.create')}}">Teacher Add</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('subjects.index')}}">Subject List</a></li>
                        <li><a href="{{route('subjects.create')}}">Subject Add</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-hotel"></i> <span> Rooms </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('rooms.index')}}">Room List</a></li>
                        <li><a href="{{route('rooms.create')}}">Room Add</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-hotel"></i> <span> Groupes </span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('groupes.index')}}">Groupe List</a></li>
                        <li><a href="{{route('groupes.create')}}">Groupe Add</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('timetable.index')}}"><i class="fas fa-calendar-day"></i> <span>Time Table </span></a>
                </li>
                <li><a href="{{ url('/admin/contacts') }}"><i class="fa fa-address-card"></i> <span>Contacts</span></a></li>
                <li><a href="{{ url('/admin/settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                <li><a href="{{ route('frontend.welcome') }}"><i class="fa fa-dashboard"></i> <span>Welcome</span></a></li>
            </ul>
        </div>
    </div>
</div>
