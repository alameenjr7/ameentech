@extends('frontend.layouts.master')

@section('title')
    <title>Nos R&eacute;alisations - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Nos R&eacute;alisations</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
                </li>
                <li>R&eacute;alisations</li>
            </ul>
        </div>
    </div>

    <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-1.png')}}" alt="image">
    </div>
    <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/page-banner/shape-2.png')}}" alt="image">
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Cases Area -->
@if (count($realisations)>0)
<div class="cases-area ptb-100">
    <div class="container">
        <div class="row">
            @forelse ($realisations as $rea)
            <div class="col-lg-6 col-md-6">
                <div class="single-cases">
                    <div class="cases-image">
                        <a href="#">
                            <img src="{{asset($rea->photo)}}" alt="image">
                        </a>
                    </div>

                    @php
                        $cats = App\Models\Category::where('id',$rea->categorie_id)->get()->first();
                        $langs = App\Models\Language::where('id',$rea->language_id)->get()->first();
                    @endphp

                    <div class="cases-content">
                        <div class="tag-1">{{$langs->title}}</div>
                        <div class="tag-2">{{$cats->title}}</div>

                        <h3>
                            <a href="#">{{$rea->title}}</a>
                        </h3>
                        <p>{{$rea->contenu}}</p>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <p class="text-center" style="padding: 60px 0; color: #94a3b8;">Aucune r&eacute;alisation disponible pour le moment.</p>
                </div>
            @endforelse

            {{ $realisations->appends($_GET)->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@else
<div class="ptb-100">
    <p class="text-center" style="color: #94a3b8;">Aucune r&eacute;alisation disponible.</p>
</div>
@endif
<!-- End Cases Area -->

@endsection
