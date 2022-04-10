@extends('frontend.layouts.master')

@section('title')
    <title>Création site Web et Développement - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Réalisation</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
                </li>
                <li>Réalisations</li>
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

<!-- Start Cases Area -->
@if (count($realisations)>0)
<div class="cases-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @forelse ($realisations as $rea)
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
                @empty
                    <p class="text-center">Pas de Réalisation</p>
                @endforelse
            </div>

            {{ $realisations->appends($_GET)->links('vendor.pagination.custom') }}
        </div>
    </div>

    <div class="cases-shape-1" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-1.png')}}" alt="image">
    </div>
    <div class="cases-shape-2" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-2.png')}}" alt="image">
    </div>
    <div class="cases-shape-3" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-3.png')}}" alt="image">
    </div>
    <div class="cases-shape-4" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-4.png')}}" alt="image">
    </div>
    <div class="cases-shape-5" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-5.png')}}" alt="image">
    </div>
    <div class="cases-shape-6" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-4.png')}}" alt="image">
    </div>
    <div class="cases-shape-7" data-speed="0.04" data-revert="true">
        <img src="{{asset('frontend/assets/images/cases-study/shape-5.png')}}" alt="image">
    </div>
</div>
@else
<p class="text-center">Pas de Réalisation</p>
@endif
<!-- End Cases Area -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3183523459637784"
    crossorigin="anonymous"></script>
    <!-- AL AMEEN -->
    <ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-3183523459637784"
    data-ad-slot="6790306307"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
@endsection
