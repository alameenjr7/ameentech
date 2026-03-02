@extends('frontend.layouts.master')

@section('title')
    <title>{{$publications->title}} - AmeenTECH</title>
@endsection

@section('content')

        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content max-width">
                    <h2>{{$publications->title}}</h2>

                    <ul>
                        <li>
                            <a href="{{route('accueil')}}">Accueil</a>
                        </li>
                        <li>D&eacute;tails Publication</li>
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

        <!-- Start Blog Details Area -->
        <div class="blog-details-area pt-100 pb-100">
            <div class="container">
                <form action="{{route('publication.filter')}}" method="POST" class="container" data-bs-toggle="validator">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="blog-details-desc">
                                <div class="article-image">
                                    <img src="{{asset($publications->photo)}}" alt="image">
                                </div>

                                <div class="article-content">
                                    <ul class="entry-meta">
                                        <li>
                                            <i class="ri-user-line"></i>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <i class="ri-time-line"></i>
                                            {{$publications->getCreatedAt()}}
                                        </li>
                                        <li>
                                            <i class="ri-message-2-line"></i>
                                            @php
                                                $comments = App\Models\PublicationReview::where('publication_id',$publications->id)->count();
                                            @endphp
                                            ({{$comments}}) Commentaire(s)
                                        </li>
                                        <li>
                                            @for ($i=0; $i<5; $i++)
                                                @if (round($publications->reviews->avg('rate'))>$i)
                                                    <i class="ri-star-fill" style="color: #f59e0b;"></i>
                                                @else
                                                    <i class="ri-star-line" style="color: #d1d5db;"></i>
                                                @endif
                                            @endfor
                                        </li>
                                    </ul>

                                    <p>{!! html_entity_decode($publications->contenu) !!}</p>

                                    <h3>{{$publications->title}}</h3>
                                </div>

                                <div class="article-footer">
                                    @php
                                        $cat = App\Models\Category::where('id',$publications->cat_id)->get()->first();
                                        $lang = App\Models\Language::where('id',$publications->language_id)->get()->first();
                                    @endphp
                                    <div class="article-tags">
                                        <a href="#">{{$cat->title}}</a>
                                        <a href="#">{{$lang->title}}</a>
                                    </div>

                                    <div class="article-share">
                                        <ul class="social">
                                            <li><span>Partager sur:</span></li>
                                            <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="ri-messenger-fill"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="article-comments">
                                    <h4>{{$comments}} Commentaire(s)</h4>
                                    @php
                                        $reviews = App\Models\PublicationReview::where(['publication_id'=>$publications->id,'status'=>'active'])->latest()->paginate(2);
                                    @endphp

                                    @if (count($reviews)>0)
                                        @foreach ($reviews as $review)
                                            <div class="comments-list">
                                                <img src="{{asset('frontend/assets/images/user.png')}}" alt="image">
                                                <h5>{{$review->full_name}}</h5>
                                                <div class="rating">
                                                    @for ($i=0; $i<4; $i++)
                                                        @if ($review->rate>$i)
                                                            <i class="ri-star-fill" aria-hidden="true" style="color: #f59e0b;"></i>
                                                        @else
                                                            <i class="ri-star-line" aria-hidden="true" style="color: #d1d5db;"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span>{{$review->getCreatedAt()}}</span>
                                                <p>{{$review->review}}</p>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="article-leave-comment">
                                    <h4>Laissez un commentaire</h4>

                                    <form method="post" action="{{route('publication.review',$publications->slug)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="rating">
                                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <input hidden type="text" name="publication_id" id="publication_id" value="{{$publications->id}}" required>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" name="full_name" value="{{old('full_name')}}" placeholder="Votre Nom *">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Votre Email *">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="review" class="form-control" placeholder="Votre commentaire...">{{old('review')}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">Publier <i class="ri-send-plane-line"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <aside class="widget-area">
                                @include('frontend.blogs._recherche')

                                @if (count($categories)>0)
                                    @include('frontend.blogs._post_cats',['cats'=>$categories])
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
        <!-- End Blog Details Area -->

@endsection
