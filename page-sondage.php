<?php get_header(); ?>

<main class="mx-auto text-center">
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
        echo '<p>' . $question . '</p>';

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

    <button type="button" id="nextBtn" class="btn btn-secondary" onclick="showNextQuestion()">Suivante</button>

    <style>
        
        input[type="radio"] {
            display: none;
        }

        label {
            display: inline-block;
            border: 3px solid;
            border-radius: 50%;
            margin: 15px;
        }

        label:nth-of-type(1),
        label:nth-of-type(2),
        label:nth-of-type(3) {
            border-color: #DE9339;
        }

        label:nth-of-type(4) {
            border-color: #fff;
        }

        label:nth-of-type(5),
        label:nth-of-type(6),
        label:nth-of-type(7) {
            border-color: #8F965F;
        }

        label:nth-of-type(1),
        label:nth-of-type(7) {
            width: 60px;
            height: 60px;
        }

        label:nth-of-type(2),
        label:nth-of-type(6) {
            width: 50px;
            height: 50px;
        }

        label:nth-of-type(3),
        label:nth-of-type(5) {
            width: 40px;
            height: 40px;
        }

        label:nth-of-type(4) {
            width: 30px;
            height: 30px;
        }

        label.active[value="1","2","3"] {
            background-color: #DE9339 !important;
            pointer-events: auto !important;
        }
        label.active[value="4"] {
            background-color: #fff !important;
            pointer-events: auto !important;
        }
        label.active[value="5","6","7"] {
            background-color: #8F965F !important;
            pointer-events: auto !important;
        }
        

        label.inactive {
            opacity: 0.5;
            pointer-events: none;
        }

        .label-text {
            display: inline-block;
            margin-right: 10px;
            margin-left: 10px;
        }
    </style>

    <script>
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

                var nextRadios = document.querySelectorAll('input[name="secteur' + nextIndex + '"]');
                nextRadios.forEach(function (nextRadio) {
                    nextRadio.disabled = false;
                });
            }
        }
    </script>

</main>

<?php get_footer() ?>
