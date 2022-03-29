@extends('frontend.layouts.master')

@section('title')
    <title>Création Applications web/mobile - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Services</h2>

            <ul>
                <li>
                    <a href="{{route('acceuil')}}">Acceuil</a>
                </li>
                <li>Services</li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-1.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-2.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-3.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-4.png')}}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Services Area -->
@if (count($services)>0)
<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="{{$service->icon}}"></i>
                    </div>
                    <h3>
                        <a href="#">{{$service->title}}</a>
                    </h3>
                    <p>{{$service->description}}</p>
                    <a href="#" class="services-btn">Lire Plus <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="services-shape-1" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-1.png')}}" alt="image">
    </div>
    <div class="services-shape-2" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-2.png')}}" alt="image">
    </div>
    <div class="services-shape-3" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-3.png')}}" alt="image">
    </div>
    <div class="services-shape-4" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-4.png')}}" alt="image">
    </div>
    <div class="services-shape-5" data-speed="0.06" data-revert="true">
        <img src="{{asset('frontend/assets/images/services/shape-5.png')}}" alt="image">
    </div>
</div>
@endif
<!-- End Services Area -->

<!-- Start Process Area -->
<div class="process-area pb-100">
    <div class="container">
        <div class="process-inner-box">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-process">
                        <i class="ri-hard-drive-line"></i>
                        <p>Recherche</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-36CC72">
                        <i class="ri-pie-chart-line"></i>
                        <p>Analyser</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-FF414B">
                        <i class="ri-quill-pen-line"></i>
                        <p>Design</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-process bg-FF6D3D">
                        <i class="ri-focus-line"></i>
                        <p>Essai</p>
                    </div>
                </div>
            </div>

            <div class="process-bar-shape">
                <img src="{{asset('frontend/assets/images/process-bar.png')}}" alt="image">
            </div>
        </div>
    </div>
</div>
<!-- End Process Area -->

<!-- Start Support Area -->
@include('frontend.layouts._support')
<!-- End Support Area -->

<!-- Start Clients Area -->
@include('frontend.layouts._client')
<!-- End Clients Area -->
<hr style="color: transparent;">
<!-- Start Overview Area -->
<div class="overview-area pb-100">
    <div class="container">
        <div class="overview-box">
            <div class="overview-content">
                <h3>Faisons quelque chose d'incroyable ensemble</h3>

                <div class="overview-btn">
                    <a href="{{route('contact')}}" class="overview-btn-one">Commencer</a>
                    <img src="{{asset('frontend/assets/images/overview/bar.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="overview-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-1.png')}}" alt="image">
    </div>
    <div class="overview-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-2.png')}}" alt="image">
    </div>
    <div class="overview-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-3.png')}}" alt="image">
    </div>
    <div class="overview-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-4.png')}}" alt="image">
    </div>
    <div class="overview-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/overview/shape-5.png')}}" alt="image">
    </div>
</div>
<!-- End Overview Area -->

@endsection
