<?php /** Template Name: IMC */ get_header(); ?>

<main class="mx-auto">

    <!-- Partie 1 : Carrousel -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <?php
            $query = new WP_Query(array(
                'post_type' => 'imc',
                'posts_per_page' => 2,
            ));

            while ($query->have_posts()) : $query->the_post();
            ?>
                <div class="col mb-4">
                    <div class="card mb-4 mx-auto border-0" style="width: 1300px; height: 840px;">
                        <?php if (has_post_thumbnail()) : ?>
                            <!-- Ajoutez ici votre code pour l'image -->
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <h5><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>


<!-- Partie 2 : Calculatrice -->
<div class="container mt-4 mx-auto">
        <div class="row  d-flex justify-content-center no-gutters">
            <!-- Card 1 : Calculatrice de l'IMC -->
            <div class="col-md-6 mb-4">
            <div class="card carte-verte"  style="height: 594px;">
                    <div class="card-body text-center">
                    <h3 class="card-title mb-3">Calculatrice de l'IMC :</h3>
                    <p>Entrez votre poids (en kg) <input id="poids"></p>
                    <p>Entrez votre taille (en cm) <input id="taille"></p>
                    <div class="btn-container text-center">
                        <button class="btn btn-custom" onclick="AfficheImc()"><span>Calculer</span></button>
                </p>
                <p>
                    <br> </br>
                    <div>
              Avec un poids de <input type="text" id="Lepoids" disabled="disabled"/> kilos et une taille de 
                <input type="text" id="Lataille" disabled="disabled"/> mètres, votre indice de masse corporelle 
                 est <br> </br><b><input type="text" id="imc" disabled="disabled"/> <br> </br></b> et
                 <i><input type="text" id="corpullence" disabled="disabled"/></i>
                    </div>
                </p>
              </div>
        </div>
        </div>
        </div>
        
        <!-- Card 2 : Descriptions et Poids Maximum -->
        <div class="col-md-6 mb-4">
                <div class="card carte-verte1" >
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Poids Maximum</th>
                                <th>Description</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                         <td><input type="text" id="Dénutrition" disabled="disabled"/></td>
                          <td>Dénutrition</td>
                            </tr>
                    <tr>
                        <td><input type="text" id="Maigreur" disabled="disabled"></td>
                        <td>Maigreur</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="Poidnormal" disabled="disabled"></td>
                        <td>Poids normal</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="Surpoids" disabled="disabled"></td>
                        <td>Surpoids</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="Obésitémodérée" disabled="disabled"></td>
                        <td>Obésité modérée</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="Obésitésévère" disabled="disabled"></td>
                        <td>Obésité sévère</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="ObésitéMorbideOuMassiv" disabled="disabled"></td>
                        <td>Obésité morbide ou massive</td>
                    </tr> 
                </tbody>
            </table>
            <!-- Bouton Sauvegarde -->
            <div class="btn-container text-center">
                        <button class="btn btn-custom" id="btnSauvegarde" value="Sauvegarde" ><span>Sauvegarder</span></button>
           <!--  <div class="text-center">
            <i><input type="button" id="btnSauvegarde" value="Sauvegarde" class="btn btn-custom"/></i> -->
            
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
    </div></div>

    <script>
        /*IMC*/
function AfficheImc() {
    var poids = Number(document.getElementById("poids").value);
    var taille = Number(document.getElementById("taille").value);
    var imc = poids / (taille * taille);

    var Lataille = taille * 1;
    var Lepoids = poids * 1;

    document.getElementById("imc").value = imc.toFixed(2);
    document.getElementById("Lataille").value = Lataille;
    document.getElementById("Lepoids").value = Lepoids;
    
    corpullence = imc*1;

if (corpullence <= 16.5) {
    document.getElementById("corpullence").value = corpullence ='vous êtes en dénutrition.';
}else if(corpullence <= 18.5){
    document.getElementById("corpullence").value = corpullence ='vous êtes en maigreur.';
}else if(corpullence <= 25){
    document.getElementById("corpullence").value = corpullence = 'vous avez un poids normal.';
}else if(corpullence <= 30){
    document.getElementById("corpullence").value = corpullence = 'vous êtes en surpoids.';
}else if(corpullence <= 35){
    document.getElementById("corpullence").value = corpullence = 'vous êtes en obésité modérée.';
}else if(corpullence <= 40){
    document.getElementById("corpullence").value = corpullence = ' vous êtes en obésité sévère.';
    }else{
        document.getElementById("corpullence").value = corpullence = 'vous êtes en obésité morbide ou massive.';
}


    document.getElementById("imc").value = imc.toFixed(2);

    highlightRow("Dénutrition", imc <= 16.5);
    highlightRow("Maigreur", imc > 16.5 && imc <= 18.5);
    highlightRow("Poidnormal", imc > 18.5 && imc <= 25);
    highlightRow("Surpoids", imc > 25 && imc <= 30);
    highlightRow("Obésitémodérée", imc > 30 && imc <= 35);
    highlightRow("Obésitésévère", imc > 35 && imc <= 40);
    highlightRow("ObésitéMorbideOuMassiv", imc > 40);

    document.getElementById("Dénutrition").value = "Moins de " + Math.floor(16.5 * (taille * taille));
    document.getElementById("Maigreur").value = "De " + Math.floor(16.5 * (taille * taille)) + " à " + Math.floor(18.5 * (taille * taille));
    document.getElementById("Poidnormal").value = "De " + Math.floor(18.5 * (taille * taille)) + " à " + Math.floor(25 * (taille * taille));
    document.getElementById("Surpoids").value = "De " + Math.floor(25 * (taille * taille)) + " à " + Math.floor(30 * (taille * taille));
    document.getElementById("Obésitémodérée").value = "De " + Math.floor(30 * (taille * taille)) + " à " + Math.floor(35 * (taille * taille));
    document.getElementById("Obésitésévère").value = "De " + Math.floor(35 * (taille * taille)) + " à " + Math.floor(40 * (taille * taille));
    document.getElementById("ObésitéMorbideOuMassiv").value = "Plus de " + Math.floor(40 * (taille * taille));
}

function highlightRow(rowId, shouldHighlight) {
    var row = document.getElementById(rowId);
    if (shouldHighlight) {
        row.style.backgroundColor = '#DE9339'; // Rose fluo
    } else {
        row.style.backgroundColor = ''; // Réinitialiser la couleur de fond
    }
}

function now(id) {
    var date = new Date();
    var annee = date.getFullYear();
    var moi = date.getMonth();
    var jours = ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'];
    var jour = date.getDay();
    var h = date.getHours();
    var m = date.getMinutes();

    if (h < 10) {
        h = "0" + h;
    }

    if (m < 10) {
        m = "0" + m;
    }

    var resultat = '' + jours[jour] + ':' + date.getDate() + '/' + ('0' + (moi + 1)).slice(-2) + '/' + annee + ' - ' + h + ':' + m;
    document.getElementById(id).innerHTML = resultat;
    setTimeout(function () {
        now(id);
    }, 1000);
}

</script>

<?php get_footer(); ?>


