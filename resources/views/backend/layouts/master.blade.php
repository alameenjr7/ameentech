<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('backend.layouts.head')
    </head>

    <body class="body-bg-f5f5f5">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="content">
                <div class="box"></div>
            </div>
        </div>
		<!-- End Preloader Area -->

        <!-- Start Sidebar Area -->
        @include('backend.layouts.sidebar')
        <!-- End Sidebar Area -->

        <!-- Start Main Content Area -->
        <div class="main-content d-flex flex-column">
            @include('backend.layouts.header')

            @yield('content')

            @include('backend.layouts.footer')
            
            @include('components.modals.modal-delete')
        </div>
        @include('backend.layouts.scripts')

    </body>
</html>