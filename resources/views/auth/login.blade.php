<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/owl.theme.default.min.css')}}">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/owl.carousel.min.css')}}">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/animate.min.css')}}">
		<!-- Remixicon CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/remixicon.css')}}">
		<!-- boxicons CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/boxicons.min.css')}}">
		<!-- MetisMenu Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/metismenu.min.css')}}">
		<!-- Simplebar Min CSS --> 
		<link rel="stylesheet" href="{{asset('backend/assets/css/simplebar.min.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
		<!-- Dark Mode CSS -->
		<link rel="stylesheet" href="{{asset('backend/assets/css/dark-mode.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('backend/assets/css/responsive.css')}}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset('backend/assets/images/favicon.png')}}">
		<!-- Title -->
		<title>Dashli - Admin Dashboard Bootstrap 5 Template</title>
    </head>

    <body class="body-bg-f5f5f5">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="content">
                <div class="box"></div>
            </div>
        </div>
		<!-- End Preloader Area -->

		<!-- Start User Area -->
		<div class="user-area">
			<div class="container">
				<div class="user-form-content">
					<h3>Connexion</h3>
                    <p>Connectez-vous pour continuer sur AmeenTech.</p>
				
                    <form class="user-form" method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Entrer votre Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<label>Mot de Passe</label>
									<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Tapez votre mot de passe">
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>
							</div>

							<div class="col-12">
								<div class="login-action">
									<span class="log-rem">
										<input id="remember-2" type="checkbox">
										<label>Rester connecté</label>
									</span>
									@if (Route::has('password.request'))
                                        <span class="forgot-login">
                                            <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                        </span>
                                    @endif
								</div>
							</div>

							<div class="col-12">
								<button class="default-btn" type="submit">
									S'identifier
								</button>
							</div>

							{{-- <div class="col-12">
								<span class="or">Or</span>
							</div>

							<div class="col-12">
								<a href="https://www.facebook.com/" target="_blank" class="or-login">
									<i class="ri-facebook-fill"></i>
									Login with facebook
								</a>
							</div> --}}
{{-- 
							<div class="col-12">
								<a href="https://www.google.com/" target="_blank" class="or-login google">
									<i class="ri-google-fill"></i>
									Login with google
								</a>
							</div> --}}

							{{-- <div class="col-12">
								<p class="create">Don’t have an account? <a href="register.html">create</a></p>
							</div> --}}
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End User Area -->

		<div class="dark-bar">
			<a href="ecommerce.html" class="d-flex align-items-center">
			   <span class="dark-title">Activer le thème sombre</span>
			</a>

			<div class="form-check form-switch">
				<input type="checkbox" class="checkbox" id="darkSwitch">
			</div>
		</div>

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script> 
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
		<!-- Form Validator Min JS -->
		<script src="{{asset('backend/assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('backend/assets/js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{asset('backend/assets/js/ajaxchimp.min.js')}}"></script>
        <!-- Custom JS -->
		<script src="{{asset('backend/assets/js/custom.js')}}"></script>
    </body>
</html>