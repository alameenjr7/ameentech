@extends('frontend.layouts.master')

@section('content')

<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Publication</h2>

            <ul>
                <li>
                    <a href="{{route('acceuil')}}">Acceuil</a>
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
        <div class="row">
            <div class="col-lg-8 col-md-12">
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

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-3.jpg')}}" alt="image"></a>
                            </div>

                            <div class="blog-content">
                                <ul class="entry-meta">
                                    <li class="tag">Marketing</li>
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
                                    <a href="blog-details.html">Branding Involves Developing the Strategy to Create a Point.</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-4.jpg')}}" alt="image"></a>
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
                                    <a href="blog-details.html">The Data-Driven Approach to Understanding</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-5.jpg')}}" alt="image"></a>
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
                                    <a href="blog-details.html">Conversion Rate the Sales Funnel Optimization</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-6.jpg')}}" alt="image"></a>
                            </div>

                            <div class="blog-content">
                                <ul class="entry-meta">
                                    <li class="tag">Startup</li>
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
                                    <a href="blog-details.html">Business Data is Changing the World’s Energy</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-7.jpg')}}" alt="image"></a>
                            </div>

                            <div class="blog-content">
                                <ul class="entry-meta">
                                    <li class="tag">Development</li>
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
                                    <a href="blog-details.html">The Data Surrounding Higher Education</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="{{asset('frontend/assets/images/blog/blog-8.jpg')}}" alt="image"></a>
                            </div>

                            <div class="blog-content">
                                <ul class="entry-meta">
                                    <li class="tag">Design</li>
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
                                    <a href="blog-details.html">Finding the Blocks of Neighboring Fields</a>
                                </h3>
                                <a href="blog-details.html" class="blog-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="ri-arrow-left-line"></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search Something">
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </form>
                    </div>

                    <div class="widget widget_categories">
                        <h3 class="widget-title">Post Categories</h3>

                        <ul>
                            <li><a href="#">Brand Identity Design(20)</a></li>
                            <li><a href="#">Digital Marketing(08)</a></li>
                            <li><a href="#">Design and Development(15)</a></li>
                            <li><a href="#">IT Startup Consulting(22)</a></li>
                            <li><a href="#">Cloud Computing Service(12)</a></li>
                            <li><a href="#">Domain and Hosting(06)</a></li>
                        </ul>
                    </div>

                    <div class="widget widget_plod_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>

                        <article class="item">
                            <a href="blog-details.html" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>

                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="blog-details.html">Design is a Plan or Specification for the Construction.</a>
                                </h4>

                                <span><i class="ri-time-line"></i> March 14, 2022</span>
                            </div>
                        </article>

                        <article class="item">
                            <a href="blog-details.html" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>

                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="blog-details.html">Branding Involves Developing Strategy to Create a Point.</a>
                                </h4>

                                <span><i class="ri-time-line"></i> March 14, 2022</span>
                            </div>
                        </article>

                        <article class="item">
                            <a href="blog-details.html" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>

                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="blog-details.html">Digital Marketing is Tatally Different From Tradetion Marketing</a>
                                </h4>

                                <span><i class="ri-time-line"></i> March 14, 2022</span>
                            </div>
                        </article>

                        <article class="item">
                            <a href="blog-details.html" class="thumb">
                                <span class="fullimage cover bg4" role="img"></span>
                            </a>

                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="blog-details.html">The Data-Driven Approach to Understanding</a>
                                </h4>

                                <span><i class="ri-time-line"></i> March 14, 2022</span>
                            </div>
                        </article>
                    </div>

                    <div class="widget widget_tag_cloud">
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
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div class="blog-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-1.png')}}" alt="image">
    </div>
    <div class="blog-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('frontend/assets/images/blog/shape-2.png')}}" alt="image">
    </div>
</div>
<!-- End Blog Area -->

@endsection
