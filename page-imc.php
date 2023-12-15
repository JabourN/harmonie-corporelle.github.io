<?php get_header(); ?>

<main class="mx-auto">
<!-- Partie 1 : Carrousel -->
<div class="container">
  <div class="row row-cols-auto">
    <div class="col">
  <div class="d-flex p-2">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc1.png" class="d-block w-100" alt="photo de femme en sous vêtement">
    </a>
    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc2.png" class="d-block w-100" alt="IMC">
    </a>    </div>
    <div class="carousel-item">
    <a class="icon-link" href="https://getbootstrap.com/docs/5.3/components/carousel/#how-it-works">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc3.png" class="d-block w-100" alt="Forum">
    </a>    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    </div>

<!-- Partie 2 : Calculatrice -->
<p>L'Indice de Masse Corporelle (IMC) est bien plus qu'un simple chiffre. Il est le reflet de notre équilibre physique, un indicateur essentiel dans notre quête d'harmonie corporelle. Calculé à partir de notre poids et de notre taille, l'IMC offre un aperçu global de notre santé physique.

Cependant, l'harmonie corporelle va au-delà des chiffres. Elle s'enracine dans les bonnes habitudes et une nutrition équilibrée. Adopter des choix alimentaires judicieux, pratiquer une activité physique régulière et cultiver une relation positive avec notre corps contribuent à créer cet équilibre tant recherché.

Rejoignez-nous dans cette exploration de l'harmonie corporelle, où l'IMC devient un compagnon, non pas de jugement, mais de compréhension. Ensemble, cultivons des habitudes saines, embrassons la nutrition éclairée, et célébrons la diversité des chemins menant à une vie équilibrée et épanouissante.</p>
    <div id="container">
        <h3>Calculatrice de l'IMC :</h3>
        <p>Entrez votre poids (en kg)
            <input id="poids">
        </p>
        <p>Entrez votre taille (en cm)
            <input id="taille">
            <button onclick="AfficheImc()">Calculer</button>
        </p>
        <p>
            <div>
                Avec un poids de <input type="text" id="Lepoids" disabled="disabled"/> kilos et une taille de 
                <input type="text" id="Lataille" disabled="disabled"/> mètres, votre indice de masse corporelle 
                est <b><input type="text" id="imc" disabled="disabled"/></b> et
                <i><input type="text" id="corpullence" disabled="disabled"/></i>
            </div>
        </p>
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