@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Langage de Programmation</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Creation</li>
                    <li>Langage</li>
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
                    <a href="{{route('langage.create')}}"  class="new-orders">
                        Ajouter une Langage de Programmation
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
                            <th scope="col">LANGAGE</th>
                            <th scope="col">LANGAGE PARENT</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">STATUT</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($languages as $language)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        #{{$language->id}}
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="figure ">
                                    <img style="width: 60px; height:60px;" src="{{asset($language->photo)}}" class="rounded-circle" alt="Images">
                                </div>
                                {{-- Adam Smith --}}
                            </td>
                            <td>
                                {{$language->title}}
                            </td>
                            <td class="bold">
                                {{$language->is_language === 1 ? 'OUI' : 'NON, Framework'}}
                            </td>
                            <td class="rating">
                                <span>{{App\Models\Language::where('id',$language->framework_id)->value('title')}}</span>
                            </td>
                            <td class="rating">
                                <span>{{$language->description}}</span>
                            </td>
                            <td class="rating">
                                <span>{{$language->status}}</span>
                            </td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li>
                                            <a class="dropdown-item" href="{{route('langage.edit',$language->id)}}">
                                                Modifier
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item btn-delete-language" data-bs-toggle="modal" language-id="{{ $language->id }}" data-bs-target="#modal-delete">
                                                Supprimer
                                                <i language-id="{{ $language->id }}" class="ri-delete-bin-6-line"></i>
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
        let deletelanguagesUrl = "{{ route('langage.destroy','language-id') }}";

        const deleteForm = $('#delete-form');
        
        $(document).on('click', '.btn-delete-language', function () {
            const _this = $(this);
            const language_id = _this.attr('language-id');
            console.log(_this);
            deletelanguagesUrl = deletelanguagesUrl.replace('language-id', language_id);
            deleteForm.attr('action', deletelanguagesUrl);
            deletelanguagesUrl = "{{ route('langage.destroy','language-id') }}";
            
        });
    });
</script>

@endsection