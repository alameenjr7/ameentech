@extends('frontend.layouts.master')

@section('content')

        
        <!-- Start Page Banner Area -->
        <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content max-width">
                    <h2>{{$publications->title}}</h2>

                    <ul>
                        <li>
                            <a href="{{route('acceuil')}}">Accueil</a>
                        </li>
                        <li>Details Publications</li>
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
                                        <li style="top: 50%;">
                                            @for ($i=0; $i<5; $i++)
                                                @if (round($publications->reviews->avg('rate'))>$i)
                                                    <i class="ri-star-fill" ></i>
                                                @else
                                                    <i class="ri-star-line"></i>
                                                @endif
                                            @endfor 
                                        </li>
                                    </ul>

                                    <p>{!! html_entity_decode($publications->contenu) !!}</p>

                                    <h3>{{$publications->title}}</h3>


                                    {{-- <ul class="wp-block-gallery columns-3">
                                        <li class="blocks-gallery-item">
                                            <figure>
                                                <img src="{{asset('frontend/assets/images/blog/blog-7.jpg')}}" alt="image">
                                            </figure>
                                        </li>

                                        <li class="blocks-gallery-item">
                                            <figure>
                                                <img src="{{asset('frontend/assets/images/blog/blog-8.jpg')}}" alt="image">
                                            </figure>
                                        </li>

                                        <li class="blocks-gallery-item">
                                            <figure>
                                                <img src="{{asset('frontend/assets/images/blog/blog-9.jpg')}}" alt="image">
                                            </figure>
                                        </li>
                                    </ul>

                                    <p>L'industrie informatique offre une mer d'options, des plates-formes, la programmation des langages, des méthodologies, des technologies, des outils, etc. Les services de conseil en informatique sont importants car la mer d'options, à partir de plates-formes.</p> --}}
                                </div>

                                {{-- <div class="article-author">
                                    <img src="{{asset(Auth::user()->photo)}}" alt="image" style="height: 40%; width:10%">
                                    <p>L'industrie informatique offre une mer d'options, des plates-formes, la programmation des langages, des méthodologies, des technologies, des outils, etc. Les services de conseil en informatique sont importants car la mer d'options, à partir de plates-formes.</p>
                                    <span>{{Auth::user()->prenom}} {{Auth::user()->nom}}</span>
                                </div> --}}

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

                                {{-- <div class="article-tag">
                                    <h4>Popular Tags</h4>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-blog">
                                                <div class="blog-image">
                                                    <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-1.jpg')}}" alt="image"></a>
                                                </div>
                    
                                                <div class="blog-content">
                                                    <ul class="entry-meta">
                                                        <li class="tag">Branding</li>
                                                        <li>
                                                            <i class="ri-time-line"></i>
                                                            March 14, 2022
                                                        </li>
                                                        <li>
                                                            <i class="ri-message-2-line"></i>
                                                            (0) Comment
                                                        </li>
                                                    </ul>
                                                    <h3>
                                                        <a href="blog-details.html">Branding Involves Developing a Strategy to Creating a Point of Differentiation.</a>
                                                    </h3>
                                                    <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-blog">
                                                <div class="blog-image">
                                                    <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-2.jpg')}}" alt="image"></a>
                                                </div>
                    
                                                <div class="blog-content">
                                                    <ul class="entry-meta">
                                                        <li class="tag">Agency</li>
                                                        <li>
                                                            <i class="ri-time-line"></i>
                                                            March 14, 2022
                                                        </li>
                                                        <li>
                                                            <i class="ri-message-2-line"></i>
                                                            (0) Comment
                                                        </li>
                                                    </ul>
                                                    <h3>
                                                        <a href="blog-details.html">Design is a Plan or Specification For The Construction of an Object.</a>
                                                    </h3>
                                                    <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

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
                                                            <i class="ri-star-fill" aria-hidden="true"></i>
                                                        @else
                                                            <i class="ri-star-line" aria-hidden="true"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span>{{$review->getCreatedAt()}}</span>
                                                <p>{{$review->review}}</p>
                                                {{-- <a href="#" class="reply-btn"><i class="ri-reply-fill"></i></a> --}}
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
                                            <hr style="color: transparent;">
                                            <div class="col-lg-6 col-md-12">
                                                <input hidden type="text" name="publication_id" id="publication_id" value="{{$publications->id}}" required>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" name="full_name" value="{{old('full_name')}}" placeholder="Name*">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Email*">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <textarea name="review" class="form-control" placeholder="Your Message">{{old('review')}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">Poster <i class="ri-arrow-right-line"></i><span></span></button>
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
                                        <h3 class="widget-title">Derniere Publication</h3>

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
        </div>
        <!-- End Blog Details Area -->

@endsection