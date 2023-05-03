<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layouts.head')

</head>

<body>

    <div class="main-wrapper">

        @include('admin.layouts.main-headerbar')


        @include('admin.layouts.main-sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                @yield('content')

            </div>

            @include('admin.layouts.footer')

        </div>
    </div>
    @include('admin.layouts.footer-scripts')
</body>

</html>
