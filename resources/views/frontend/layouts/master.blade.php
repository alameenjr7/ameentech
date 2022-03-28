<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-light">
    <head>
        @include('frontend.layouts.head')
    </head>

    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        @include('frontend.layouts.header')
        <!-- End Navbar Area -->

        <!-- Start Content Area -->
        @yield('content')
        <!-- End Content Area -->

        <!-- Start Footer Area -->
        @include('frontend.layouts.footer')
        <!-- End Footer Area -->
        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-s-line"></i>
        </div>
        <!-- End Go Top Area -->

        <!-- dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- dark version -->
        @include('frontend.layouts.scripts')
        <script>
            $(document).ready(function(){
                var path="{{route('auto.pub.search')}}";
                $('#search_text').autocomplete({
                    source:function(request,response){
                        $.ajax({
                            url:path,
                            dataType:"JSON",
                            data:{
                                term:request.term
                            },
                            success:function(data){
                                console.log(data);
                                response(data);
                            }
                        });
                    },
                    minLength:1,
                });
            });
        </script>
    </body>
</html>
