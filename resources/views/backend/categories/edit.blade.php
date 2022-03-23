@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Modifier la Categorie</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Modification</li>
                    <li>Categorie</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('categorie.update',$categories->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{$categories->title}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <div class="ui-kit-card mb-24">
                <h3>Est Parent</h3>
                <div class="form-check">
                    <input type="checkbox" id="is_parent" name="is_parent" value="{{$categories->is_parent}}" {{$categories->is_parent == 1 ? 'checked' : ''}} />
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        (OUI Par Defaut)
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 {{$categories->is_parent == 1 ? 'd-none' : ''}}" id="parent_cat_div">
            <label for="parent_id" class="form-label">Categorie Parent</label>
            <select name="parent_id" class="form-control form-control-rounded">
                {{-- <option value="">-- Selectionner --</option> --}}
                @foreach ($parent_cats as $pcats)
                    <option value="{{$pcats->id}}" {{$categories->parent_id==$pcats->id ? 'selected' : ''}}>{{$pcats->title}}</option>
                @endforeach
            </select>
        </div>
        

        <div class="col-md-12">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>Choisir...</option>
                <option value="active" {{$categories->status=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{$categories->status=='inactive' ? 'selected' : ''}}>Desactiver</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="description">{{$categories->description}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Mettre a jour</button>
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
        }
        else{
           $('#parent_cat_div').removeClass('d-none');
            $('#parent_cat_div').val('');
        }
    })
</script>

@endsection