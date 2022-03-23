@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <form action="{{route('publication.create')}}" method="GET">
                        <button  type="submit" class="default-btn">Créer une Publication</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Liste</li>
                    <li>Publication</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="product-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <form class="search-bar d-flex">
                    <i class="ri-search-line"></i>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class="col-lg-6 col-sm-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Search By Category</option>
                    <option value="1">Travel Shoe</option>
                    <option value="2">Hiking Rope</option>
                    <option value="3">Travel Bag</option>
                </select>
            </div>
        </div>

        <div class="row">
            @foreach ($publications as $publication)
                <div class="col-xl-3 col-sm-6">
                    <div class="single-products">
                        <div class="products-img">
                            <img src="{{asset($publication->photo)}}" alt="Images" style="max-width: 100%;height: 240px;">

                            <div class="add-to-cart">
                                <ul class="text-center">
                                    <li class="text-center">
                                        <a href="{{route('publication.edit',$publication->id)}}" class="default-btn text-center">
                                            Modifier
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <hr style="color: transparent;">
                                    <li class="text-center">
                                        <a href="" class="default-btn text-center" data-bs-toggle="modal" publication-id="{{ $publication->id }}" data-bs-target="#modal-delete">
                                            Supprimer
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content d-flex">
                            <div class="product-title flex-grow-1">
                                <h3>
                                    <a href="{{route('publication.detail',$publication->slug)}}">
                                        {{$publication->title}}
                                    </a>
                                </h3>
                                <span class="price">{{$publication->conditions}}</span>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <ul>
                                    <li>
                                        @for ($i=0; $i<5; $i++)
                                            @if (round($publication->reviews->avg('rate'))>$i)
                                                <i class="ri-star-s-fill"></i>
                                            @else
                                                <i class="ri-star-line"></i>
                                            @endif
                                        @endfor  
                                    </li>
                                </ul>

                                <span class="reviews">({{App\Models\PublicationReview::where('publication_id',$publication->id)->count()}} Commentaire(s))</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

           <div class="col-12">
               <div class="text-center">
                  <button class="default-btn">Voir Plus</button>
               </div>
           </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')

<script>
    $(function(){
        let deletepublicationsUrl = "{{ route('publication.destroy','publication-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-publication', function () {
            const _this = $(this);
            const publication_id = _this.attr('publication-id');
            console.log(_this);
            deletepublicationsUrl = deletepublicationsUrl.replace('publication-id', publication_id);
            deleteForm.attr('action', deletepublicationsUrl);
            deletepublicationsUrl = "{{ route('publication.destroy','publication-id') }}";
            
        });
    });
</script>

@endsection
