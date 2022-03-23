@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Modifier une Publication</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Modification</li>
                    <li>Publication</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('publication.update',$publications->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{$publications->title}}" class="form-control" id="inputEmail4">
        </div>
        {{-- langage --}}
        <div class="col-md-12">
            <label for="language_id" class="form-label">Langage Parent</label>
            <select name="language_id" id="language_id" class="form-control form-control-rounded">
                <option value="">-- Selectionner --</option>
                @foreach (\App\Models\Language::where(['is_language'=>1,'status'=>'active'])->get() as $lang)
                    <option value="{{$lang->id}}" {{$lang->id==$publications->language_id ? 'selected' : ''}}>{{ucfirst($lang->title)}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12 d-none" id="child_lang_div">
            <label for="child_lang_id">Framework</label>
            <select id="child_lang_id" name="child_lang_id" class="form-control">
                
            </select>
        </div>
        {{-- categorie --}}
        <div class="col-md-12">
            <label for="cat_id" class="form-label">Categorie Parent</label>
            <select name="cat_id" id="cat_id" class="form-control form-control-rounded">
                <option value="">-- Selectionner --</option>
                @foreach (\App\Models\Category::where(['is_parent'=>1,'status'=>'active'])->get() as $cat)
                    <option value="{{$cat->id}}" {{$cat->id==$publications->categorie_id ? 'selected' : ''}}>{{ucfirst($cat->title)}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12 d-none" id="child_cat_div">
            <label for="child_cat_id">Sous Categorie</label>
            <select id="child_cat_id" name="child_cat_id" class="form-control">
                
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
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$publications->photo}}">
              </div>
              <div id="holder" style="margin-top:15px;max-height:100px;"></div>
        </div>
        
        <div class="col-md-6">
            <label for="inputState" class="form-label">Conditions</label>
            <select id="inputState" name="condition" class="form-select form-control">
                <option selected>- Choisir -</option>
                <option value="terminer" {{$publications->condition=='terminer' ? 'selected' : ''}}>Terminer</option>
                <option value="en_cours" {{$publications->condition=='en_cours' ? 'selected' : ''}}>En Cours</option>
                <option value="future" {{$publications->condition=='future' ? 'selected' : ''}}>Future</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>Choisir...</option>
                <option value="active" {{$publications->status=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{$publications->status=='inactive' ? 'selected' : ''}}>Désactiver</option>
            </select>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="1234 Main St" name="contenu">{{$publications->contenu}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Enregistrer</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')

<script>
    var child_cat_id = {{$publications->child_cat_id}};
    $('#cat_id').change(function(){
        var cat_id = $(this).val();
        if(cat_id != null){
                $.ajax({
                    url: "/admin/categorie/"+cat_id+"/child",
                    type: "POST",
                    data: {
                        _token: "{{csrf_token()}}",
                        cat_id:cat_id,
                    },
                    success:function(response){
                        console.log(response);
                        var html_option = "<option value=''>-- Sous Categorie --</option>";
                        if(response.status){
                            $('#child_cat_div').removeClass('d-none');
                            $.each(response.data,function(id,title){
                                html_option += "<option value='"+id+"' "+(child_cat_id == id ? 'selected' : '')+">"+title+"</option>"
                            });
                        }
                        else{
                            $('#child_cat_div').removeClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);
                    }
                });
            }
    });
    if(child_cat_id != null){
        $('#cat_id').change();
    }
</script>

<script>
    var child_lang_id = {{$publications->child_lang_id}};
    $('#language_id').change(function(){
        var cat_id = $(this).val();
        if(cat_id != null){
                $.ajax({
                    url: "/admin/langage/"+cat_id+"/child",
                    type: "POST",
                    data: {
                        _token: "{{csrf_token()}}",
                        cat_id:cat_id,
                    },
                    success:function(response){
                        console.log(response);
                        var html_option = "<option value=''>-- Framework --</option>";
                        if(response.status){
                            $('#child_lang_div').removeClass('d-none');
                            $.each(response.data,function(id,title){
                                html_option += "<option value='"+id+"' "+(child_lang_id == id ? 'selected' : '')+">"+title+"</option>"
                            });
                        }
                        else{
                            $('#child_lang_div').removeClass('d-none');
                        }
                        $('#child_lang_id').html(html_option);
                    }
                });
            }
    });
    if(child_lang_id != null){
        $('#language_id').change();
    }
</script>
@endsection
