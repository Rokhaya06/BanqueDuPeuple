
$(document).ready(function() {

    $('#numeroCompteRemp').blur(function () {
        var numero = $(this).val();
        $.ajax('../controller/operationController.php', {//permet de recuperer les types d'operations
            type: 'get',
            data: {recherche: numero},
            cache: false
        }).done(function (data) {
            if (data == 0){//Le numero recherché n'existe pas
                $('#btnRembourser').attr('disabled','disabled');
            } else if(data == -1){//Compte bloqué
                $('#btnRembourser').attr('disabled','disabled');
            }else{
                $.ajax('../controller/operationController.php', {//permet de recuperer les types d'operations
                    type: 'get',
                    data: {montantMensuel: numero},
                    cache: false
                }).done(function (data) {
                    data = data.substr(0,data.length-1);
                    var montantEmprunt = data.split(',')[0];
                    var nbreMois = data.split(',')[1];
                    $('#montantRemb').val(Math.round(montantEmprunt/nbreMois));
                    $('#montantEmprunte').val(montantEmprunt);
                    $('#btnRembourser').removeAttr('disabled');
                })
            }
        })

    });


    $('#numeroCompte').blur(function () {
        var numero = $(this).val();
        $.ajax('../controller/operationController.php', {//permet de recuperer les types d'operations
            type: 'get',
            data: {recherche: numero},
            cache: false
        }).done(function (data) {
            if (data == 0){//Le numero recherché n'existe pas
                $('#montantEmprunt').attr('disabled','disabled');
                $('#nbrePaiement').attr('disabled','disabled');
                $('#btnEmprunter').attr('disabled','disabled');
            } else if(data == -1){//Compte bloqué
                $('#montantEmprunt').attr('disabled','disabled');
                $('#nbrePaiement').attr('disabled','disabled');
                $('#btnEmprunter').attr('disabled','disabled');
            }else{
                $('#montantEmprunt').removeAttr('disabled');
                $('#nbrePaiement').removeAttr('disabled');
                $('#btnEmprunter').removeAttr('disabled');
            }
        })

    });


});