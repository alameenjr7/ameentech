<div id="project-modal" class="modal fade project-modal" tabindex="-1" aria-labelledby="modalDemandeDevisLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg py-5" role="document">

      <div class="modal-content">

        <div class="modal-header">
          <h5>
            Vous avez un projet, une id&eacute;e &agrave; concr&eacute;tiser ? Faites-le-nous savoir !
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <div class="register-form" style="max-width: 800px;">
                <form action="{{route('submit.project')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pr&eacute;nom et Nom / Raison Sociale <span class="text-danger">*</span></label>
                                <input type="text" name="user_fullname" value="{{old('user_fullname')}}" class="form-control" required placeholder="Pr&eacute;nom et Nom / Raison Sociale">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" value="{{old('email')}}" class="form-control" required placeholder="Votre Adresse Mail">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>T&eacute;l&eacute;phone <span class="text-danger">*</span></label>
                                <input type="text" name="telephone" value="{{old('telephone')}}" class="form-control" required placeholder="Ex: (+221) 772050626">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pays de R&eacute;sidence <span class="text-danger">*</span></label>
                                <input type="text" name="residence" value="{{old('residence')}}" class="form-control" required placeholder="Ex: S&eacute;n&eacute;gal">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom du projet</label>
                                <input type="text" name="project" value="{{old('project')}}" class="form-control" placeholder="Le nom de votre projet">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Votre Budget en FCFA</label>
                                <input type="number" name="budget" value="{{old('budget')}}" class="form-control" placeholder="Votre Budget en FCFA">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Exprimer votre besoin <span class="text-danger">*</span></label>
                                <textarea name="besoin_client" class="form-control" id="message" cols="30" rows="6" required placeholder="R&eacute;digez votre besoin...">{{old('besoin_client')}}</textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn" style="float: right;">Envoyer <i class="ri-send-plane-line"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
