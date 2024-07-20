// fichier script 
$( document ).ready(function() { // Charge le JS après que toute la page soit chargée
//////////////////////////////////////////////////

// fonctions de la page main

    // Partie Récupération requête

    $("#GO").on("click",  function() {
        let req1=$("#recherche1").val();
        site=$('input[name=site]:checked').map(function() {
            return this.value;
        }).get();

        // alert(req1);

        //cache les réglages au lancement d'une recherche si aucun réglage n'est sélectionné
        if(!$('input[name=site]:checked').length){
            $("#reglages").hide("slow");
        }

        // TEST Aficher les valeurs
    
        $.ajax({
            type: "POST",
            url: "scripts_php/script_recherche.php",
            data: {"recette":req1, "site":site},
            dataType: "html",
            success: function (response) {
                $("#omqcs_result").hide(response);
                if($("#resultats").is(":hidden")){
                    $("#resultats").html(response);
                    $("#resultats").show(response);
                }else{
                    $("double_recherche").hide(response);
                    $("#resultats_double_recherche").html(response);
                }

            }
        });
    });

    //On mange quoi ce soir ?

    $("#omqcs").on("click" , function(){

        $.ajax({
            type: "POST",
            url: "scripts_php/script_omqcs.php",
            data: {},
            dataType: "html",
            success: function (response) {
                $("#omqcs_result").html(response)
                $("#omqcs_result").show(response)

            }
        });
    });


    // Partie réglage

        // Afficher / Masquer
    $("#reg").on({
        "click" : function() {
            $("#reglages").toggle();  // Affiche ou désaffiche l'onglet réglages
            $("#historique").hide();  // Masque l'onglet historique si jamais il est visible
        }
    });

    // Partie Historique de recherche

        // Afficher / Masquer

    $("#hist").on({
        "click" : function() {
            $("#historique").toggle(); //Affiche ou désaffiche l'onglet historique
            $("#reglages").hide();     // Masque l'onglet réglages si jamais il est visible.
            
            $.ajax({
                type: "POST",
                url: "scripts_php/script_historique.php",
                data: {},
                dataType: "html",
                success: function (response) {
                    $("#historique").html(response)
                    $("#historique").show(response)
    
                }
            });

        }
    });

    // bouton double recherche

    $("#double_rech").on({
        "click":function(){
            $("#main_result").removeClass("row justify-content-center").addClass("row justify-content-evenly");
            $("#double_recherche").toggle("slow");
    }

    });
    

/////////////////////////////////////////////////////

//Fonctions de la page de connexion (normalement pris en charge par form dans php dynamique)

///////////////////////////////////////////////////////

//Fonctions de la page d'inscription

    //récupération des 3 champs (login, mdp, mail) et envoie au serv

    $("#inscriptionBtn").on({
        "click" : function() {
            let new_login=$("#login").val();
            let new_mdp=$("#mdp").val();
            let new_mail=$("#mail").val();

            $.ajax({
                type: "POST",
                url: "scripts_php/script_inscription.php",
                data: {"login":new_login, "mdp":new_mdp, "mail":new_mail},
                dataType: "html",
                success: function (response) {
                    $("#repIns").html(response)
                }
            });
        }
    });

});