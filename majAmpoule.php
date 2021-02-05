<!-- Modal -->
<div class="modal fade" id="majAmpoule<?= $row['id_ampoule'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MAJ Opération</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="validateMaj.php?maj_id=<?= $row['id_ampoule'] ?>" method="post">
                    <div class="form-group">
                        <label for="date_changement">date de changement</label>
                        <input type="date" class="form-control" id="date_changement" name="date_changement" required>
                    </div>

                    <!------------ Etage--------------->

                    <div class="form-group">
                        <label for="etage">Etage</label>
                        <select class="form-control" id="etage" name="etage">
                            <option value="RDC">RDC</option>
                            <option value="Etage 1">1er</option>
                            <option value="Etage 2">2ieme</option>
                            <option value="Etage 3">3ieme</option>
                            <option value="Etage 4">4ieme</option>
                            <option value="Etage 5">5ieme</option>
                            <option value="Etage 6">6ieme</option>
                            <option value="Etage 7">7ieme</option>
                            <option value="Etage 8">8ieme</option>
                            <option value="Etage 9">9ieme</option>
                            <option value="Etage 10">10ieme</option>
                            <option value="Etage 11">11ieme</option>
                        </select>
                    </div>

                    <!------------ position ampoule--------------->

                    <div class="form-group">
                        <label for="position">Position de l'ampoule</label>
                        <select class="form-control" id="etage" name="position_ampoule">
                            <option value="sortie_d'ascenseur">Sortie d'ascenseur</option>
                            <option value="porte_escalier">Porte escalier</option>
                            <option value="couloir_gauche">Couloir gauche</option>
                            <option value="couloir_gauche">Couloir droite</option>
                            <option value="couloir_devant_ascenseur">Couloir devant ascenseur</option>
                        </select>
                    </div>

                    <!------------ Prix ampoule--------------->

                    <div class="form-group">
                        <label for="prix_ampoule">Prix de l'ampoule</label>
                        <input type="number" value="<?= $row['prix_ampoule'] ?>" min="1" max="999999" step="0.01" class="form-control" id="prix_ampoule" name="prix_ampoule" required>
                    </div>

                    <!--------------- bouton validation --------------->
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-outline-success">MAJ Opération</button>
                    </div>
                </form>
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
    </div>
</div>