<!--  Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: #f90283">
                <h5 class="modal-title" id="exampleModalLabel"  style="color:aliceblue">Confirmation de suppression</h5>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir le supprimer ?</p>
            </div>
            <div class="modal-footer">
                <button class="default-btn" type="button" data-bs-dismiss="modal">Annuler</button>
                <form method="POST" action="#" id="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="default-btn">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  Modal -->