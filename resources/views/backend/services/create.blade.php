@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Ajout d'un Service</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Service</li>
                    <li>Creation</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('service.store')}}" method="POST">
        @csrf
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Titre</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Icon</label>
            <select id="inputState" name="icon" class="form-select form-control">
                <option selected>--Choisir--</option>
                <option value="ri-quill-pen-line" {{old('icon')=='ri-quill-pen-line' ? 'selected' : ''}}>icon 1</option>
                <option value="ri-pie-chart-line" {{old('icon')=='ri-pie-chart-line' ? 'selected' : ''}}>icon 2</option>
                <option value="ri-lightbulb-line" {{old('icon')=='ri-lightbulb-line' ? 'selected' : ''}}>icon 3</option>
                <option value="ri-customer-service-2-line" {{old('icon')=='ri-customer-service-2-line' ? 'selected' : ''}}>icon 4</option>
                <option value="ri-cloud-line" {{old('icon')=='ri-cloud-line' ? 'selected' : ''}}>icon 5</option>
                <option value="ri-layout-row-line" {{old('icon')=='ri-layout-row-line' ? 'selected' : ''}}>icon 6</option>
                <option value="ri-hard-drive-line" {{old('icon')=='ri-hard-drive-line' ? 'selected' : ''}}>icon 7</option>
                <option value="ri-focus-line" {{old('icon')=='ri-focus-line' ? 'selected' : ''}}>icon 8</option>
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
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Enregistrer</button>
        </div>
    </form>
</div>

@endsection

