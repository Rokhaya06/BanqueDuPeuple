<?php
    include "header.php";
?>
<style>
.navbar-brand{
    /*background-color: lavenderBlush;*/
    font-size: 30px;
    font-family: fantasy;
    
}
.navbar-collapse{
background:linear-gradient(to right, lavenderBlush, black);
font-size: 45px;
margin-left: 25px;
}
li:hover{
cursor: pointer;
border-radius: 5px;
background-color:lavenderBlush;
text-decoration:lightsalmon;
text-shadow:2px 2px #00BFFF;
margin-left:30px;

}
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">BANQUE DU PEUPLE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?view=accueil"> <span class="sr-only">Accueil</span> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="?view=compte" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>LISTE DES COMPTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="?view=client" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>>LISTE DES CLIENTS</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link"  href="?view=utilisateur" <?php if($_SESSION['profil'] == 'caissier'){echo  'hidden';} ?>> UTILISATEURS</a>
                </li>
                
                <li class="nav-item mr-0 " style="float: right;margin-left: 300px">
                    <a class="nav-link"   href="/BanqueDuPeuple/controller/userController.php?deconnexion=1" id="deconnexion"><button class="btn btn-outline-success my-2 my-sm-0" style="background-color: #00CED1; color: white">DECONNEXION</button></a>
        </div>
    </nav>
</div>