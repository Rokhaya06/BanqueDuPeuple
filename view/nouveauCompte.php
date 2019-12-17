
<form method="POST" action="/BanqueDuPeuple/controller/compteController.php" id="nouveauCompte">
    <div class="jumbotron">
        <legend class="text-center" style="color: orangered;">INFOS CLIENT</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input type="text" placeholder="NUMERO CNI" name="cni" id="cni" class="champsNewC" /></td>
                <td class="formul_tab"><input type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC" /></td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC" /></td>
                <td class="formul_tab"><input type="text" placeholder="ADRESSE" name="adresse" id="adresse" class=" champsNewC" /></td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td colspan="2" class="formul_tab"><input type="text" placeholder="TELEPHONE" name="tel" id="tel" class="champsNewC" /></td>
            </tr>
        </table>
    </div>
    <div class="jumbotron">
        <legend class="text-center" style="color: orangered;">INFOS COMPTE</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab"><input class="champsNewC" type="text" name="numero" id="numero" value="<?= $numero ?>" readonly/></td>
                <td class="formul_tab"><input class="champsNewC" type="number" min="500" name="solde" id="solde" ></td>
            </tr>
        </table>
    </div>
    <br><br>
    <div class="form-group" style="width: 20%; margin-left: 450px; margin-top: -60px; " >
        <input type="submit" class="btn btn-block btn-primary"  name="ajoutCompte" value="Valider" >
    </div>
</form>
<?php
/**
 * Created by PhpStorm.
 * User: Brice lefa
 * Date: 21/02/2019
 * Time: 12:17
 */