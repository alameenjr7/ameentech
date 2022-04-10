@extends('frontend.layouts.master')

@section('title')
    <title>Actualité et Tutoriel Technique - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Publication</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
                </li>
                <li>Publication</li>
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

<!-- Start Blog Area -->
<div class="blog-area pt-100 pb-100">
    <div class="container">
        <form action="{{route('publication.filter')}}" method="POST" class="container" data-bs-toggle="validator">
            @csrf
            <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @if (count($publications)>0)
                                @foreach ($publications as $publication)
                                <div class="col-lg-6 col-md-6">
                                        <div class="single-blog">
                                            <div class="blog-image">
                                                <a href="{{route('publications.detail',$publication->slug)}}">
                                                    <img src="{{asset($publication->photo)}}" alt="image">
                                                </a>
                                            </div>

                                            <div class="blog-content">
                                                @php
                                                    $comments = App\Models\PublicationReview::where('publication_id',$publication->id)->count();

                                                    $cat = App\Models\Category::where('id',$publication->cat_id)->get()->first();
                                                @endphp
                                                <ul class="entry-meta">
                                                    <li class="tag">{{$cat->title}}</li>
                                                    <li>
                                                        <i class="ri-time-line"></i>
                                                        {{$publication->getCreatedAt()}}
                                                    </li>
                                                    <li>
                                                        <i class="ri-message-2-line"></i>
                                                        ({{$comments}}) Commentaire(s)
                                                    </li>
                                                </ul>
                                                <h3>
                                                    <a href="{{route('publications.detail',$publication->slug)}}">{{$publication->title}}</a>
                                                </h3>
                                                <a href="{{route('publications.detail',$publication->slug)}}" class="blog-btn">Voir Plus <i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                            @else
                                <p class="text-center">Pas de Publication disponible !</p>
                            @endif

                            {{ $publications->appends($_GET)->links('vendor.pagination.custom') }}
                        </div>
                    </div>

                <div class="col-lg-4 col-md-12 floar">
                    <aside class="widget-area">
                        {{-- <div class="widget widget_search">
                            @include('frontend.blogs._recherche')
                        </div> --}}

                        @if (count($cats)>0)
                            @include('frontend.blogs._post_cats')
                        @endif

                        @if (count($languages)>0)
                            @include('frontend.blogs._lang_post')
                        @endif

                        @if (count($lastPublications)>0)
                            <div class="widget widget_plod_posts_thumb">
                                <h3 class="widget-title">Dernières Publications</h3>

                                @include('frontend.blogs._last_post')
                            </div>
                        @endif

                        {{-- <div class="widget widget_tag_cloud">
                            <h3 class="widget-title">Popular Tags</h3>

                            <div class="tagcloud">
                                <a href="#">Agency</a>
                                <a href="#">Branding</a>
                                <a href="#">Marketing</a>
                                <a href="#">Design</a>
                                <a href="#">Development</a>
                                <a href="#">Consulting</a>
                                <a href="#">Startup</a>
                                <a href="#">Popular</a>
                                <a href="#">WordPress</a>
                                <a href="#">Financial</a>
                                <a href="#">Branding</a>
                            </div>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </form>
    </div>

    <div class="blog-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-1.png')}}" alt="image">
    </div>
    <div class="blog-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-2.png')}}" alt="image">
    </div>
</div>
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
<!-- End Blog Area -->

@endsection
