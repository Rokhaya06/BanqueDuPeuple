<?php
require_once '../model/modelClient.php';

$listClients = listeClients();
?>
<style>
  .table-hover{
      font-size: 23px;
  }
</style>

<div class="container">

    <div class="container">

        <h5 class="display-4 mb-3">Liste des clients</h5>

        <table class="table table-hover" bgcolor="#F0FFF0">
            <tr>
                <th>CNI</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>TELEPHONE</th>
                <th>ADRESSE</th>
                <th>ACTIONS</th>
            </tr>
            <?php
            foreach ($listClients as $c){
                ?>
                <tr>
                    <td> <?=$c['cni'] ?> </td>
                    <td> <?=$c['nom'] ?> </td>
                    <td> <?=$c['prenom'] ?> </td>
                    <td> <?=$c['tel'] ?> </td>
                    <td> <?=$c['adresse'] ?> </td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="/BanqueDuPeuple/view/indexFinance.php?view=ajoutCompte&cin=<?=$c['cni'] ?>&idClient=<?= $c['id'] ?>">Ajout Compte</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>