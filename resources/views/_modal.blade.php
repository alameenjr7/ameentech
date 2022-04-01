<div id="project-modal" class="modal fade project-modal" tabindex="-1" aria-labelledby="modalDemandeDevisLabel" style=" display: ;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg py-5" role="document">

      <div class="modal-content">
        
        <div class="modal-header" style="background-color: #0064FB">
          <h5 style="color: #ffffff; text-align:center; margin-left:50px;">
            Vous avez un projet, une idée à concrétiser ? Faites-le-nous savoir!
          </h5>
        </div>

        <div class="modal-body" style="padding:0;">
  
            {{-- <div class="container"> --}}
                {{-- <div class="row"> --}}

                    {{-- <div class="col-lg-12 col-md-12"> --}}
                        <div class="register-form" style="max-width: 800px;">
                            <form action="{{route('submit.project')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom et Nom / Raison Sociale <span class="text-danger">*</span></label>
                                            <input type="text" name="user_fullname" value="{{old('user_fullname')}}" class="form-control" required data-error="Saisissez votre nom ou raison sociale" placeholder="Prénom et Nom / Raison Sociale">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" value="{{old('email')}}" class="form-control" required data-error="Entrer une email correct" placeholder="Votre Adresse Mail">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Telephone <span class="text-danger">*</span></label>
                                            <input type="text" name="telephone" value="{{old('telephone')}}" class="form-control" required data-error="Saisisser votre telephone" placeholder="Ex: (+221) 772050626">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pays de Residence <span class="text-danger">*</span></label>
                                            <input type="text" name="residence" value="{{old('residence')}}" class="form-control" required data-error="Veuiller renseigner votre pays de residence" placeholder="Ex: Senegal">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom du projet </label>
                                            <input type="text" name="project" value="{{old('project')}}" class="form-control" placeholder="Le nom de votre projet">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Votre Budget en FCFA </label>
                                            <input type="number" name="budget" value="{{old('budget')}}" class="form-control" placeholder="Votre Budget en FCFA">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Exprimer votre besoin <span class="text-danger">*</span></label>
                                            <textarea name="besoin_client" class="form-control" id="message" cols="30" rows="20" required data-error="Remplisser ce champ" placeholder="Rédigez votre besoin...">{{old('besoin_client')}}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn float-right" style="width: 25%;float: right;">ENVOYER <i class="ri-arrow-right-line"></i><span></span></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
          
        </div>
      </div>
    </div>
  </div>