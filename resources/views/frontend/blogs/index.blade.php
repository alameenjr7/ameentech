@extends('frontend.layouts.master')

@section('title')
    <title>Publications & Tutoriels - AmeenTECH</title>
@endsection

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Publications</h2>

            <ul>
                <li>
                    <a href="{{route('accueil')}}">Accueil</a>
                </li>
                <li>Publications</li>
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
                                        <a href="{{route('publications.detail',$publication->slug)}}" class="blog-btn">Lire l'article <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <p class="text-center" style="padding: 60px 0; color: #94a3b8;">Aucune publication disponible.</p>
                            </div>
                        @endif

                        {{ $publications->appends($_GET)->links('vendor.pagination.custom') }}
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        @if (count($cats)>0)
                            @include('frontend.blogs._post_cats')
                        @endif

                        @if (count($languages)>0)
                            @include('frontend.blogs._lang_post')
                        @endif

                        @if (count($lastPublications)>0)
                            <div class="widget widget_plod_posts_thumb">
                                <h3 class="widget-title">Derni&egrave;res Publications</h3>

                                @include('frontend.blogs._last_post')
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Blog Area -->

@endsection
