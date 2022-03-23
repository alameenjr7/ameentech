@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Ajouter une categorie</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Création</li>
                    <li>categorie</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('categorie.store')}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <div class="ui-kit-card mb-24">
                <h3>Est Parent</h3>
                <div class="form-check">
                    <input type="checkbox" id="is_parent" name="is_parent" value="1" checked />
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        (OUI Par Defaut)
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 d-none" id="parent_cat_div">
            <label for="parent_id" class="form-label">Categorie Parent</label>
            <select name="parent_id" class="form-control form-control-rounded">
                <option value="">-- Selectionner --</option>
                @foreach ($parent_cats as $pcats)
                    <option value="{{$pcats->id}}" {{old('parent_id')==$pcats->id ? 'selected' : ''}}>{{$pcats->title}}</option>
                @endforeach
            </select>
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
            <textarea type="text" class="form-control" id="inputAddress" placeholder="Ecrire quelque chose..." name="description">{{old('description')}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Enregistrer</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')

<script>
    $('#is_parent').change(function(e){
       e.preventDefault();
       var is_checked = $('#is_parent').prop('checked');
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
