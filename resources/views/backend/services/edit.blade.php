@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Modifier le service</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Service</li>
                    <li>Modification</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('service.update',$services->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{$services->title}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Photo</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$services->photo}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if ($services->photo != null)
                    <img src="{{asset($services->photo)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Status</label>
            <select id="inputState" name="status" class="form-select form-control">
                <option selected>Choisir...</option>
                <option value="active" {{$services->status=='active' ? 'selected' : ''}}>Activer</option>
                <option value="inactive" {{$services->status=='inactive' ? 'selected' : ''}}>Desactiver</option>
            </select>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="1234 Main St" name="description">{{$services->description}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Mettre a jour</button>
        </div>
    </form>
</div>

@endsection