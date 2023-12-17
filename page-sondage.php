<?php get_header(); ?>

<main class="mx-auto">

<div class="card" style="mx-auto">
    <div class="card-body">
        <h3 class="card-title">Information personnelle</h3>

        <div class="d-flex justify-content-center">
            <div class="p-2">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <p>Nom:
                        <input type="text" name="nom" id="Infoperso" required>
                    </p>
            </div>
            <div class="p-2">
                <p>Prénom:
                    <input type="text" name="prenom" id="Infoperso" required>
                </p>
            </div>
            <div class="p-2">
                <p>Âge:
                    <select name="age">
                        <?php
                        // Âge
                        for ($i = 1; $i <= 150; $i++) {
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                    </select>
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="p-2">
                <p>E-mail:
                    <input type="email" name="email" id="Infoperso" required>
                </p>
            </div>
            <div class="p-2">
                <details>
                    <summary>Informations additionnelles</summary>
                    <p>Sexe:
                        <select name="sexe">
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                            <option value="NB">Non binaire</option>
                        </select>
                    </p>
                </details>
            </div>
        </div>

        </form>

    </div>
</div>
</div>


<div class="mx-auto text-center">



    <?php
/* Phrase du sondage */
    $questions = array(
        "Je m’engage régulièrement dans des activités sportives ou physiques pour maintenir un mode de vie actif.",
        "Je choisis des aliments en fonction de leur valeur nutritive plutôt que de leur goût seul.",
        "Je fais attention à la provenance de mes aliments, privilégiant par exemple des produits locaux.",
        "Je suis attentif aux signaux de mon corps pour savoir quand l’ai faim ou suis rassasié.",
        "Je cherche des aliments qui peuvent contribuer à mon bien-être émotionnel et mental.",
        "Je surveille activement mon apport calorique quotidien pour maintenir un poids santé.",
        "Je m’efforce de rester hydraté en buvant suffisamment d’eau tout au long de la journée",
        "Je choisis des aliments en fonction de leur valeur nutritive plutôt que de leur gout seul.",
        "L’idée de détoxifier mon corps à travers mon alimentation est importante pour mol.",
        "Je m’assure de consommer suffisamment de protéines pour soutenir la récupération après mes séances d’entraînement.",
    );

    foreach ($questions as $index => $question) {
        echo '<div class="question' . ($index > 0 ? ' inactive' : '') . '" id="question' . $index . '">';
        echo '<h5>' . $question . '</h5>';

        for ($i = 1; $i <= 7; $i++) {
            if ($i == 1) {
                echo '<span class="label-text">D\'accord</span>';
            }

            echo '<label for="secteur' . $index . $i . '" onclick="changerCouleur(this, ' . $index . ',' . $i . ')" class="' . ($index > 0 ? 'inactive' : '') . '"></label>';
            echo '<input type="radio" name="secteur' . $index . '" value="' . $i . '" id="secteur' . $index . $i . '" ' . ($index > 0 ? 'disabled' : '') . '>';

            if ($i == 7) {
                echo '<span class="label-text">Pas d\'accord</span>';
            }
        }
        echo '</div>';
    }
    ?>

<button type="button" id="nextBtn" class="btn btn-secondary" onclick="redirectToResults()">Suivante</button>

<script>
    var currentQuestion = 0;

    function changerCouleur(label, index, i) {
        var currentLabels = document.querySelectorAll('label[for^="secteur' + index + '"]');
        currentLabels.forEach(function (currentLabel) {
            currentLabel.classList.remove('active');
        });

        label.classList.add('active');

        currentLabels.forEach(function (currentLabel) {
            currentLabel.classList.add('inactive');
        });

        var borderColor = window.getComputedStyle(label, null).getPropertyValue('border-color');
        label.style.backgroundColor = borderColor;

        document.getElementById('nextBtn').disabled = false;

        if (index < <?php echo count($questions) - 1; ?>) {
            var nextIndex = index + 1;
            var nextLabels = document.querySelectorAll('label[for^="secteur' + nextIndex + '"]');
            nextLabels.forEach(function (nextLabel) {
                nextLabel.classList.remove('inactive');
            });

            // Réactivez les boutons radio de la question suivante
            var nextRadios = document.querySelectorAll('input[name="secteur' + nextIndex + '"]');
            nextRadios.forEach(function (nextRadio) {
                nextRadio.disabled = false;
            });
        }
    }

    function redirectToResults() {
        // Liste des URLs des pages résultats
        var resultsPages = [
            'http://localhost:8888/harmonie-corporelle/resultats/', // Remplacez 'url1' par l'URL réelle de votre première page résultats
        ];

        // Choisissez une URL au hasard
        var randomUrl = resultsPages[Math.floor(Math.random() * resultsPages.length)];

        // Redirigez l'utilisateur vers la page sélectionnée
        window.location.href = randomUrl;
    }
</script>

</div>

</main>

<?php get_footer() ?>
