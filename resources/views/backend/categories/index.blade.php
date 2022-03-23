@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Categories</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Liste</li>
                    <li>Categorie</li>
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
                    <a href="{{route('categorie.create')}}"  class="new-orders">
                        Ajouter une Categorie
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
                            <th scope="col">TITRE</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">CAT. PARENT</th>
                            <th scope="col">PARENT</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categorie)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$categorie->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                {{$categorie->title}}
                            </td>
                            <td>
                                {{$categorie->description}}
                            </td>
                            <td class="bold">
                                {{$categorie->is_parent === 1 ? 'OUI' : 'NON'}}
                            </td>
                            <td class="rating">
                                <span>{{App\Models\Category::where('id',$categorie->parent_id)->value('title')}}</span>
                            </td>
                            <td class="rating">
                                <span>{{$categorie->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('categorie.edit',$categorie->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-categorie" data-bs-toggle="modal" categorie-id="{{ $categorie->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i categorie-id="{{ $categorie->id }}" class="ri-delete-bin-6-line"></i>
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
        let deletecategoriesUrl = "{{ route('categorie.destroy','categorie-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-categorie', function () {
            const _this = $(this);
            const categorie_id = _this.attr('categorie-id');
            console.log(_this);
            deletecategoriesUrl = deletecategoriesUrl.replace('categorie-id', categorie_id);
            deleteForm.attr('action', deletecategoriesUrl);
            deletecategoriesUrl = "{{ route('categorie.destroy','categorie-id') }}";
            
        });
    });
</script>

@endsection