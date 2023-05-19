<!DOCTYPE html>
<html lang="en">

<head>

    @include('teacher.layouts.head')

</head>

<body>

    <div class="main-wrapper">

        @include('teacher.layouts.main-headerbar')


        @include('teacher.layouts.main-sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                @yield('content')

            </div>

            @include('teacher.layouts.footer')

        </div>
    </div>
    @include('teacher.layouts.footer-scripts')
</body>

</html>
