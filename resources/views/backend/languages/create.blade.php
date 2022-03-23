@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Ajouter une Langage de Programatiom</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Création</li>
                    <li>Langage</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('langage.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">URL</label>
            <input type="text" name="url" value="{{old('url')}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-12">
            <div class="ui-kit-card mb-24">
                <h3>Est Une Langage</h3>
                <div class="form-check">
                    <input type="checkbox" id="is_language" name="is_language" value="1" checked />
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        (OUI Par Defaut)
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-none" id="parent_cat_div">
            <label for="framework_id" class="form-label">Langage Parent</label>
            <select name="framework_id" class="form-control form-control-rounded">
                <option value="">-- Selectionner --</option>
                @foreach ($lang_framework as $framework)
                    <option value="{{$framework->id}}" {{old('framework_id')==$framework->id ? 'selected' : ''}}>{{$framework->title}}</option>
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
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
              </div>
              <div id="holder" style="margin-top:15px;max-height:100px;"></div>
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>Choisir...</option>
                <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Désactiver</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="description">{{old('description')}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Enregistrer</button>
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
           $('#parent_cat_div').val('');
       }
       else{
           $('#parent_cat_div').removeClass('d-none');
       }
    });
</script>

@endsection
