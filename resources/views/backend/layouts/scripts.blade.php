		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('backend/assets/js/jquery.min.js')}}"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Owl Carousel Min JS -->
		<script src="{{asset('backend/assets/js/owl.carousel.min.js')}}"></script>
		<!-- Metismenu Min JS -->
        <script src="{{asset('backend/assets/js/metismenu.min.js')}}"></script>
		<!-- Simplebar Min JS -->
        <script src="{{asset('backend/assets/js/simplebar.min.js')}}"></script>
        <!-- mixitup Min JS -->
        <script src="{{asset('backend/assets/js/mixitup.min.js')}}"></script>
        <!-- Dark Mode Switch Min JS -->
        <script src="{{asset('backend/assets/js/dark-mode-switch.min.js')}}"></script>
        <!-- Apexcharts Min JS -->
        <script src="{{asset('backend/assets/js/apexcharts/apexcharts.min.js')}}"></script>
        <!-- Charts Custom Min JS -->
        <script src="{{asset('backend/assets/js/charts-custom.js')}}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{asset('backend/assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('backend/assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('backend/assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{asset('backend/assets/js/custom.js')}}"></script>

		<script src="{{asset('vendor/summernote/summernote.js')}}"></script>

		<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

		<script>
			$('#lfm').filemanager('image');
		</script>

		<script>
			$(document).ready(function() {
				$('#description').summernote();
			});
		</script>


		@yield('scripts')