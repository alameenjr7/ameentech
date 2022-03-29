        <!-- Jquery Slim JS -->
        <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap Bundle JS -->
        <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
        <!-- Nice Select JS -->
        <script src="{{asset('frontend/assets/js/nice-select.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Fancybox JS -->
        <script src="{{asset('frontend/assets/js/fancybox.min.js')}}"></script>
        <!-- TweenMax JS -->
        <script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
        <!-- Scrollbar JS -->
        <script src="{{asset('frontend/assets/js/scrollbar.min.js')}}"></script>
        <!-- Horizontal Scrollbar JS -->
        <script src="{{asset('frontend/assets/js/horizontal-scrollbar.min.js')}}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
        <script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
        <!-- Wow JS -->
        <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
        
		<script src="{{asset('backend/assets/js/toastr.min.js')}}"></script>
		<script src="{{asset('backend/assets/js/toastr.script.min.js')}}"></script>
        
        {{-- <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

        @if (session()->has('success'))
        <script>
            const notyf = new Notyf({
                dismissible: true,
                duration: 4000,
                position: {
                    x:'right',
                    y:'top'
                }
            })
            notyf.success('{{ session('success') }}')
        </script>
        @endif

            
        @if (session()->has('error'))
            <script>
                const notyf = new Notyf({dismissible:true})
                notyf.error('{{ session('error') }}')
            </script>
        @endif

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3183523459637784" crossorigin="anonymous"></script>

        @yield('scripts')