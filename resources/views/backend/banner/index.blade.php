@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Bannieres</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Pages</li>
                    <li>Banniere</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="order-details-area customer-area mb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <form class="search-bar d-flex">
                    <i class="ri-search-line"></i>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="add-new-orders">
                    <a href="{{route('banniere.create')}}"  class="new-orders">
                        Ajouter une Banniere
                        <i class="ri-add-circle-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="latest-transaction-area">
            <div class="table-responsive" data-simplebar>
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">PHOTO</th>
                            <th scope="col">TITRE</th>
                            <th scope="col">SOUS-TITRE</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$banner->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="figure ">
                                    <img style="width: 60px; height:60px;" src="{{asset($banner->photo)}}" class="rounded-circle" alt="Images">
                                </div>
                                {{-- Adam Smith --}}
                            </td>
                            <td>
                                {{$banner->title}}
                            </td>
                            <td class="bold">
                                {{$banner->subtitle}}
                            </td>
                            <td class="rating">
                                <span>{{$banner->description}}</span>
                            </td>
                            <td class="rating">
                                <span>{{$banner->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('banniere.edit',$banner->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-banner" data-bs-toggle="modal" banner-id="{{ $banner->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i banner-id="{{ $banner->id }}" class="ri-delete-bin-6-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <div class="row">
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

<script>
    $(function(){
        let deletebannersUrl = "{{ route('banniere.destroy','banner-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-banner', function () {
            const _this = $(this);
            const banner_id = _this.attr('banner-id');
            console.log(_this);
            deletebannersUrl = deletebannersUrl.replace('banner-id', banner_id);
            deleteForm.attr('action', deletebannersUrl);
            deletebannersUrl = "{{ route('banniere.destroy','banner-id') }}";
            
        });
    });
</script>

@endsection