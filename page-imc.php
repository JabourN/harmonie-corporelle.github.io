<?php get_header(); ?>

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
                    <div class="card mb-4 mx-auto border-0" style="width: 1300px; height: 830px;">
                        <?php if (has_post_thumbnail()) : ?>
                            <!-- Ajoutez ici votre code pour l'image -->
                        <?php endif; ?>
                        <div class="card-body text-center" style="margin-top: 20px;">
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
<div class="container mt-4">
        <div class="row d-flex justify-content-between">
            <!-- Card 1 : Calculatrice de l'IMC -->
            <div class="col-md-6 mb-4">
            <div class="card carte-verte"  style="height: 594px;">
                    <div class="card-body text-center">
                    <h3 class="card-title">Calculatrice de l'IMC :</h3>
                    <p>Entrez votre poids (en kg) <input id="poids"></p>
                    <p>Entrez votre taille (en cm) <input id="taille"></p>
                    <div class="btn-container text-center">
                        <button class="btn btn-custom" onclick="AfficheImc()"><span>Calculer</span></button>
                </p>
                <p>
                    <div>
              Avec un poids de <input type="text" id="Lepoids" disabled="disabled"/> kilos et une taille de 
                <input type="text" id="Lataille" disabled="disabled"/> mètres, votre indice de masse corporelle 
                 est <b><input type="text" id="imc" disabled="disabled"/></b> et
                 <i><input type="text" id="corpullence" disabled="disabled"/></i>
                    </div>
                </p>
     
        </div>
        </div>
        </div>
        </div>
        <!-- Card 2 : Descriptions et Poids Maximum -->
        <div class="col-md-6 mb-4">
                <div class="card carte-verte1" style="width: 600px;">
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
            <div class="text-center">
                <i><input type="button" id="btn" value="Sauvegarde" class="btn btn-custom" /></i>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
    </div></div>


<?php get_footer() ?>