@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Mes Services</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Liste</li>
                    <li>Service</li>
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
                    <a href="{{route('service.create')}}"  class="new-orders">
                        Ajouter un Service
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
                        @foreach ($services as $service)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$service->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="figure ">
                                    <img style="width: 60px; height:60px;" src="{{asset($service->photo)}}" class="rounded-circle" alt="Images">
                                </div>
                                {{-- Adam Smith --}}
                            </td>
                            <td class="bold">
                                {{$service->title}}
                            </td>
                            <td class="rating">
                                <span>{!!  html_entity_decode($service->description) !!}</span>
                            </td>
                            <td>
                                <span>{{$service->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('service.edit',$service->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-service" data-bs-toggle="modal" service-id="{{ $service->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i service-id="{{ $service->id }}" class="ri-delete-bin-6-line"></i>
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
        let deleteservicesUrl = "{{ route('service.destroy','service-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-service', function () {
            const _this = $(this);
            const service_id = _this.attr('service-id');
            console.log(_this);
            deleteservicesUrl = deleteservicesUrl.replace('service-id', service_id);
            deleteForm.attr('action', deleteservicesUrl);
            deleteservicesUrl = "{{ route('service.destroy','service-id') }}";
            
        });
    });
</script>

@endsection