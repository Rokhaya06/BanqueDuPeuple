<?php
    require_once "../model/modelCompte.php";
    //Recupere les comptes
    $listComptes = listeComptes();
    //var_dump($listComptes[0]);
?>
<style>
  .table-hover{
      font-size: 23px;
  }

</style>

<br>
    <div class="aligner">
    </div><br>
<table id="listCompte" class="table table-hover"  bgcolor="#F0F8FF" cellspacing="0">
    <tr>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th>Prenom & Nom Client </th>
        <th class="text-center" id="A">
            <a class="btn btn-sm btn-outline-primary" href="/BanqueDuPeuple/view/indexFinance.php?view=nouveauCompte">Nouveau Client</a>
        </th>
    </tr>
    <?php
        foreach ($listComptes as $c){
            if ($c['etat'] == 0){ //User bloqué
                $couleur = "bg-danger";
                $activer="";
                $bloquer="disabled";
            }
            else{//User débloqué
                $couleur = "";
                $bloquer = "";
                $activer = "disabled";
            }
    ?>
        <tr class="<?= $couleur ?>">
            <td> <?= $c['numero'] ?> </td>
            <td> <?= $c['dateCreation'] ?> </td>
            <td> <?= $c['solde'] ?> </td>
            <td> <?= ucfirst($c['prenom']) .' '. strtoupper($c['nom']) ?> </td>
            <td class="text-center">
                 <a href="/BanqueDuPeuple/controller/compteController.php?action=bloquer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-danger <?= $bloquer ?>">Bloquer</a>
                 <a href="/BanqueDuPeuple/controller/compteController.php?action=activer&idCompte=<?= $c['id'] ?>" class="btn btn-sm btn-outline-success <?= $activer ?>">Activer</a>
            </td>
        </tr>
    <?php } ?>
</table>
<br>


<script src="/BanqueDuPeuple/public/js/scriptCompte.js"></script>
<?php
