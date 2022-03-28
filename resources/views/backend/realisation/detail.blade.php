@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Detail Realisation</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Details</li>
                    <li>Realisations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-details-area">
    <div class="container-fluid">
        <div class="product-details-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image pr-15">
                        <img src="{{asset($realisations->photo)}}" alt="" style="max-width: 100%;width:537px;height: auto;max-height:540px">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc pl-15">
                        <h3>{{$realisations->title}}</h3>

                        <div class="price">
                            @php
                                $cat = App\Models\Category::where('id',$realisations->categorie_id)->get()->first();
                                $cat_child = App\Models\Category::where('id',$realisations->child_cat_id)->get()->first();
                                $lang = App\Models\Language::where('id',$realisations->language_id)->get()->first();
                                $lang_child = App\Models\Language::where('id',$realisations->child_lang_id)->get()->first();
                            @endphp
                            <span class="new-price">{{$cat->title}} @if($cat_child)<del>{{$cat_child->title}}</del>@endif</span>
                        </div>

                        <div class="product-review">
                            <div class="rating">
                                @for ($i=0; $i<5; $i++)
                                    @if (round($realisations->reviews->avg('rate'))>$i)
                                        <i class="ri-star-fill" aria-hidden="true"></i>
                                    @else
                                        <i class="ri-star-line" aria-hidden="true"></i>
                                    @endif
                                @endfor 
                            </div>
                            <a href="#" class="rating-count">({{App\Models\realisationReview::where('realisation_id',$realisations->id)->count()}} Avis Clients)</a>
                        </div>

                        <p>{!! html_entity_decode($realisations->contenu) !!}</p>

                        {{-- <div class="quantities-wrap">
                            <span class="quantities">Quantities:</span>

                            <div class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class="ri-subtract-line"></i>
                                    </span>

                                    <input type="text" value="1">

                                    <span class="plus-btn">
                                        <i class="ri-add-line"></i>
                                    </span>
                                </div>
                            </div>
                            
                            <a href="shopping-cart.html" class="default-btn radius-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </div> --}}

                        <ul class="sku">
                            <li>
                                STATUT:
                                @if ($realisations->status == 'active')
                                    <span style="color: #28c76f;">Activer</span>
                                @else
                                    <span style="color: #e0040f;">Desactiver</span>                   
                                @endif
                            </li>
                            <li>
                                Conditions:
                                @if ($realisations->condition == 'terminer')
                                    <span style="color: #28c76f;">Terminer</span>
                                @elseif ($realisations->condition == 'en_cours')
                                    <span style="color: #fa9c30;">En Cours</span>
                                @else
                                    <span style="color: #0660e7;">Future</span>
                                @endif
                            </li>
                            <li>
                                Language:
                                <span>{{$lang->title}}  @if($lang_child) => {{$lang_child->title}}@endif</span>
                            </li>
                            <li>
                                Categories:
                                <span>{{$cat->title}} @if($cat_child) => {{$cat_child->title}}@endif</span>
                            </li>
                        </ul>

                        <ul class="social-wrap">
                            <li>
                                <span class="sku">Partage:</span>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div id="reviews" class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        Description
                                    </li>
                                    <li>
                                        Reviews
                                    </li>
                                </ul>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <h3>Description du Realisation</h3>
                                            <p>{!! html_entity_decode($realisations->contenu) !!}</p>
                                        </div>
                                    </div>

                                    
                                @php
                                    $reviews = App\Models\RealisationReview::where(['realisation_id'=>$realisations->id,'status'=>'active'])->get();
                                    $avg_rate = App\Models\RealisationReview::where(['realisation_id'=>$realisations->id,'status'=>'active'])->avg('rate');
                                    $count_rev = App\Models\RealisationReview::where(['realisation_id'=>$realisations->id,'status'=>'active'])->count();
                                @endphp

                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>Avis des Clients</h3>

                                                <div class="review-title">
                                                    <div class="rating">
                                                        @for ($i=0; $i<5; $i++)
                                                            @if ($avg_rate>$i)
                                                                <i class="ri-star-fill" aria-hidden="true"></i>
                                                            @else
                                                                <i class="ri-star-line" aria-hidden="true"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <p>Basé sur {{$count_rev}} avis</p>

                                                    {{-- <a href="product-details.html" class="btn default-btn">Write A Review</a> --}}
                                                </div>
                                                @if (count($reviews)>0)
                                                    <div class="review-comments">
                                                        @foreach ($reviews as $review)
                                                            <div class="review-item">
                                                                <div class="rating">
                                                                    @for ($i=0; $i<5; $i++)
                                                                        @if ($reviews->rate>$i)
                                                                            <i class="ri-star-fill" aria-hidden="true"></i>
                                                                        @else
                                                                            <i class="ri-star-line" aria-hidden="true"></i>
                                                                        @endif
                                                                    @endfor
                                                                </div>
                                                                <h3>{{$review->full_name}}</h3>
                                                                <span><strong>Admin</strong> on <strong>{{$review->getCreatedAt()}}</strong></span>
                                                                <p>{{$review->review}}</p>

                                                                <a href="product-details.html" class="review-report-link">Report As Inappropriate</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                {{-- <div class="review-form">
                                                    <h3>Write A Review</h3>

                                                    <form>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" id="name" name="name" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" id="email" name="email" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Review Title</label>
                                                                    <input type="text" id="review-title" name="review-title" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>Body of Review (1500)</label>
                                                                    <textarea name="review-body" id="review-body" cols="30" rows="8" class="form-control"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn">Submit Review</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection