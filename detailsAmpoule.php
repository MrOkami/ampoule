<!-- Modal -->
<div class="modal fade" id="detailsAmpoule<?= $row['id_ampoule'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Détail de l'opération : <?= $row['id_ampoule'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li class="bg-primary"><?= "ID de opération : " .$row['id_ampoule'] ?></li>
                    <li class="bg-secondary"><?= "Date de changement : " .$date_formater->format('d/m/Y'); ?></li>
                    <li class="bg-info"><?= "Étage : " .$row['etage'] ?></li>
                    <li class="bg-success"><?= "Position ampoule : " .$row['position_ampoule'] ?></li>
                    <li class="bg-danger"><?= "Prix : " .$row['prix_ampoule'] ?> €</li>
                </ul>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
