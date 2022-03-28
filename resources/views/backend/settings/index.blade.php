@extends('backend.layouts.master')

@section('content')

<div class="page-title-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6">
                <div class="page-title">
                    <h3>Mettre a jour</h3>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <ul class="page-title-list">
                    <li>Modification</li>
                    <li>Parametre</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-kit-cards grid mb-24">
    {{-- <h3>Complex</h3> --}}
    <form class="row g-3" class="row g-3" action="{{route('parametre.update',$settings->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Title</label>
            <input type="text" name="title" value="{{$settings->title}}" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Meta Description</label>
            <input type="text" name="meta_description" value="{{$settings->meta_description}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Meta Keywords</label>
            <input type="text" name="meta_keywords" value="{{$settings->meta_keywords}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Email</label>
            <input type="text" name="email_1" value="{{$settings->email_1}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Logo</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="logo" value="{{$settings->logo}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('logo') != null)
                    <img src="{{asset($settings->logo)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Logo 2</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm1" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="logo2" value="{{$settings->logo2}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('logo2') != null)
                    <img src="{{asset($settings->logo2)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Favicon</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm2" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="favicon" value="{{$settings->favicon}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('favicon') != null)
                    <img src="{{asset($settings->favicon)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Favicon 2</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm3" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="favicon2" value="{{$settings->favicon2}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('favicon2') != null)
                    <img src="{{asset($settings->favicon2)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            
            <label for="inputPassword4" class="form-label">Email 2</label>
            <input type="text" name="email_2" value="{{$settings->email_2}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Telephone 1</label>
            <input type="text" step="" max="5" min="1" name="telephone1" value="{{$settings->telephone1}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Telephone 2</label>
            <input type="text" name="telephone2" value="{{$settings->telephone2}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Fax</label>
            <input type="text" name="fax" value="{{$settings->fax}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Adresse</label>
            <input type="text" name="adresse" value="{{$settings->adresse}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Lot</label>
            <input type="text" name="lot" value="{{$settings->lot}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Appartement</label>
            <input type="text" name="appartement" value="{{$settings->appartement}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Texte Footer</label>
            <input type="text" name="footer" value="{{$settings->footer}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Texte Abonnement</label>
            <input type="text" name="text_abonnement" value="{{$settings->text_abonnement}}" class="form-control" id="inputPassword4">
        </div>
        
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Backgroud Footer</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm4" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="background_footer" value="{{$settings->background_footer}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('background_footer') != null)
                    <img src="{{asset($settings->background_footer)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Backgroud Header</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm5" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="background_header" value="{{$settings->background_header}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('background_header') != null)
                    <img src="{{asset($settings->background_header)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Image Footer</label>
            <div class="input-group">
                <span class="input-group-btn">
                  <button id="lfm6" data-input="thumbnail" data-preview="holder" class="default-btn text-center" style="height: 100%;">
                    <i class="fa fa-picture-o"></i> Choisir
                  </button>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image_footer" value="{{$settings->image_footer}}">
            </div>
            <div id="holder" style="margin-top:15px;max-height:100px;">
                @if (get_setting('image_footer') != null)
                    <img src="{{asset($settings->image_footer)}}" alt="logo" style="border: 1px solid #ddd; padding: 4px 8px; max-height: 100px;">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Facebook URL</label>
            <input type="text" name="facebook_url" value="{{$settings->facebook_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Instagram URL</label>
            <input type="text" name="instagram_url" value="{{$settings->instagram_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Twitter URL</label>
            <input type="text" name="twitter_url" value="{{$settings->twitter_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Linkedin URL</label>
            <input type="text" name="linkedin_url" value="{{$settings->linkedin_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Youtube URL</label>
            <input type="text" name="youtube_url" value="{{$settings->youtube_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Map URL</label>
            <input type="text" name="map_url" value="{{$settings->map_url}}" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
            <button type="submit" class="default-btn">Mettre a jour</button>
        </div>
    </form>
</div>

@endsection