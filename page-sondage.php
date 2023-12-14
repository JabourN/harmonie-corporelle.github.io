<?php get_header(); ?>

<main>

    <form method="post" action="">
        <p>
            <input type="radio" name="secteur1" value="1">
            <input type="radio" name="secteur1" value="2">
            <input type="radio" name="secteur1" value="3">
            <input type="radio" name="secteur1" value="4">
            <input type="radio" name="secteur1" value="5">
            <input type="radio" name="secteur1" value="6">
            <input type="radio" name="secteur1" value="7">
        </p>
        <p>
    <button type="button" class="btn btn-secondary"onclick="window.location.href='http://localhost:8888/harmonie-corporelle/resultats/';">Résultats</button>
        </p>
    </form>

    <?php
    if (isset($_POST['soumission']) && $_POST['soumission'] == "OK") {
        if (isset($_POST['secteur1'])) {
            $selectedValue = $_POST['secteur1'];
            echo 'Vous avez sélectionné le bouton avec la valeur : ' . $selectedValue;
        } else {
            echo 'Aucun bouton sélectionné';
        }
    }
    ?>

<style>
</style>

</main>
          
<?php get_footer() ?>
