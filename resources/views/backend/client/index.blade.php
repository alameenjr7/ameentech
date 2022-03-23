@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Client</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Listes</li>
                    <li>Clients</li>
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
                    <a href="{{route('client.create')}}"  class="new-orders">
                        Ajouter un Client
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
                            <th scope="col">EMAIL</th>
                            <th scope="col">POSTE</th>
                            <th scope="col">FEEDBACK</th>
                            <th scope="col">RATE</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$client->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="figure ">
                                    <img style="width: 60px; height:60px;" src="{{asset($client->photo)}}" class="rounded-circle" alt="Images">
                                </div>
                                {{$client->prenom}} {{$client->nom}}
                            </td>
                            <td>
                                {{$client->email}}
                            </td>
                            <td class="bold">
                                {{$client->poste}}
                            </td>
                            <td>
                                <span>{{$client->feedback}}</span>
                            </td>
                            <td class="rating">
                                <i class="ri-star-fill"></i>
                                <span>{{$client->rate}}</span>
                            </td>
                            <td>
                                <span>{{$client->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('client.edit',$client->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-client" data-bs-toggle="modal" client-id="{{ $client->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i client-id="{{ $client->id }}" class="ri-delete-bin-6-line"></i>
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
        let deleteclientsUrl = "{{ route('client.destroy','client-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-client', function () {
            const _this = $(this);
            const client_id = _this.attr('client-id');
            console.log(_this);
            deleteclientsUrl = deleteclientsUrl.replace('client-id', client_id);
            deleteForm.attr('action', deleteclientsUrl);
            deleteclientsUrl = "{{ route('client.destroy','client-id') }}";
            
        });
    });
</script>

@endsection