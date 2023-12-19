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
            <div class="card mb-4 mx-auto border-0" style="width: 1300px; height: 850px;">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="card-img-top">
                <?php endif; ?>
                <div class="card-body text-center">
                    <h5 class="card-title custom-card-title"><?php the_title(); ?></h5>
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

<div class="container">
    <div class="row">
    <div class="col-md-6">
    <div id="container">
    <h3>Calculatrice de l'IMC :</h3>
        <p>Entrez votre poids (en kg) <input id="poids"></p>
        <p>Entrez votre taille (en cm) <input id="taille"></p>
        <div class="btn-container text-center">
          <button class="btn btn-custom" onclick="AfficheImc()"><span>Calculer</span></button>
        </div>
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
        <div class="col-md-6">
        <br> 
        <table>
            <thead>
                <tr>
                    <th>Poids Maximum</th>
                    <th>&emsp;Description</th>
                </tr> 
            </thead>
            <tbody> 
                <tr>
                    <td><input type="text" id="Dénutrition" disabled="disabled"/></td>
                    <td>&emsp;Dénutrition</td>
                </tr>
                <tr>
                    <td><input type="text" id="Maigreur" disabled="disabled"></td>
                    <td>&emsp;Maigreur</td>
                </tr>
                <tr>
                    <td><input type="text" id="Poidnormal" disabled="disabled"></td>
                    <td>&emsp;Poids normal</td>
                </tr>
                <tr>
                    <td><input type="text" id="Surpoids" disabled="disabled"></td>
                    <td>&emsp;Surpoids</td>
                </tr>
                <tr>
                    <td><input type="text" id="Obésitémodérée" disabled="disabled"></td>
                    <td>&emsp;Obésité modérée</td>
                </tr>
                <tr>
                    <td><input type="text" id="Obésitésévère" disabled="disabled"></td>
                    <td>&emsp;Obésité sévère</td>
                </tr>
                <tr>
                    <td><input type="text" id="ObésitéMorbideOuMassiv" disabled="disabled"></td>
                    <td>&emsp;Obésité morbide ou massive</td>
                </tr> 
            </tbody>
        </table>

        <br />
 <i><input type="button" id="btn" value="Sauvegarde" /></i>

</main>
     
<?php get_footer() ?>