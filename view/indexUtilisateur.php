
<form method="POST" action="/BanqueDuPeuple/controller/userController.php" id="nouveauUtilisateur">
    <div class="jumbotron">
        <legend class="text-center" ; style="color: orangered;">AJOUT UTILISATEUR</legend>
        <table class="table table-borderless col-sm-8 offset-sm-2">
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab">
                    <input type="text" placeholder="NOM" name="nom" id="nom" class="champsNewC"/>
                </td>
                <td class="formul_tab">
                    <input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="champsNewC"/>
                </td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td class="formul_tab">
                    <input type="text" placeholder="LOGIN" name="login" id="login" class="champsNewC" required/>
                </td>
                <td class="formul_tab">
                    <input type="password" placeholder="MOT DE PASSE" name="mdp" id="mdp" class="champsNewC" required/>
                </td>
            </tr>
            <tr class="text-center bg-secondary text-white">
                <td colspan="2" class="formul_tab">
                    <select class="champsNewC" name="profil">
                        <option selected>admin</option>
                        <option>Gestionnaire de comptes</option>
                        <option>caissier</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="aligner" style="width: 10%; margin-left: 800px;"><input type="submit" class="btn btn-block btn-primary" name="ajoutCompte" value="Valider" ></div>
</form>