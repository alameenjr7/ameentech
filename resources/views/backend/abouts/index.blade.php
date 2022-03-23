@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>aproposs</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Pages</li>
                    <li>apropos</li>
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
                    <a href="{{route('apropos.create')}}"  class="new-orders">
                        Ajouter un Propos
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
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abouts as $about)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$about->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="figure ">
                                    <img style="width: 60px; height:60px;" src="{{asset($about->photo)}}" class="rounded-circle" alt="Images">
                                </div>
                                {{-- Adam Smith --}}
                            </td>
                            <td>
                                {{$about->title}}
                            </td>
                            <td class="rating">
                                <span>{{$about->description}}</span>
                            </td>
                            <td class="rating">
                                <span>{{$about->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('apropos.edit',$about->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-about" data-bs-toggle="modal" about-id="{{ $about->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i about-id="{{ $about->id }}" class="ri-delete-bin-6-line"></i>
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
        let deleteaboutsUrl = "{{ route('apropos.destroy','about-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-about', function () {
            const _this = $(this);
            const about_id = _this.attr('about-id');
            console.log(_this);
            deleteaboutsUrl = deleteaboutsUrl.replace('about-id', about_id);
            deleteForm.attr('action', deleteaboutsUrl);
            deleteaboutsUrl = "{{ route('apropos.destroy','about-id') }}";
            
        });
    });
</script>

@endsection