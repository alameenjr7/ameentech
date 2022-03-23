@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Modifier Langage</h3>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Modification</li>
                    <li>Langage</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('langage.update',$languages->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{$languages->title}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">URL</label>
            <input type="text" name="url" value="{{$languages->url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-12">
            <div class="ui-kit-card mb-24">
                <h3>Est une Langage</h3>
                <div class="form-check">
                    <input type="checkbox" id="is_language" name="is_language" value="{{$languages->is_language}}" {{$languages->is_language == 1 ? 'checked' : ''}} />
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        (OUI Par Defaut)
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 {{$languages->is_language == 1 ? 'd-none' : ''}}" id="parent_cat_div">
            <label for="framework_id" class="form-label">Categorie Parent</label>
            <select name="framework_id" class="form-control form-control-rounded">
                <option value="">-- Selectionner --</option>
                @foreach ($lang_framework as $framework)
                    <option value="{{$framework->id}}" {{$languages->framework_id==$framework->id ? 'selected' : ''}}>{{$framework->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Photo</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$languages->photo}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if ($languages->photo != null)
                    <img src="{{asset($languages->photo)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>Choisir...</option>
                <option value="active" {{$languages->status=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{$languages->status=='inactive' ? 'selected' : ''}}>Desactiver</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="description">{{$languages->description}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Mettre a jour</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')

<script>
    $('#is_language').change(function(e){
        e.preventDefault();
        var is_checked = $('#is_language').prop('checked');
        if(is_checked){
            $('#parent_cat_div').addClass('d-none');
        }
        else{
            $('#parent_cat_div').removeClass('d-none');
            $('#parent_cat_div').val('');
        }
    })
</script>

@endsection
