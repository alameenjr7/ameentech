@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Modifier le Client</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Modification</li>
                    <li>Client</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('client.update',$clients->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Prenom</label>
            <input type="text" name="prenom" value="{{$clients->prenom}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">NOM</label>
            <input type="text" name="nom" value="{{$clients->nom}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="email" name="email" value="{{$clients->email}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Poste</label>
            <input type="text" name="poste" value="{{$clients->poste}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Photo</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$clients->photo}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if ($clients->photo != null)
                    <img src="{{asset($clients->photo)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>- Choisir -</option>
                <option value="active" {{$clients->status=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{$clients->status=='inactive' ? 'selected' : ''}}>Désactiver</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Rate</label>
            <input type="number" step="" max="5" min="1" name="rate" value="{{$clients->rate}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Site Web URL</label>
            <input type="text" name="web_url" value="{{$clients->web_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Facebook URL</label>
            <input type="text" name="fb_url" value="{{$clients->fb_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Instagram URL</label>
            <input type="text" name="ig_url" value="{{$clients->ig_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Twitter URL</label>
            <input type="text" name="tw_url" value="{{$clients->tw_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">FEEDBACK</label>
            <textarea type="text" class="form-control" id="inputAddress" placeholder="Ecrire quelque chose..." name="feedback">{{$clients->feedback}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Mettre a jour</button>
        </div>
    </form>
</div>

@endsection