<?php get_header(); ?>

<main class="mx-auto text-center">

    <?php
    $questions = array(
        "Quelle est votre préférence alimentaire?",
        "Combien de fruits consommez-vous chaque jour?",
        "Avez-vous des allergies alimentaires?",
        "Quel est votre plat préféré?",
        "Pratiquez-vous une activité physique régulière?",
        "Quelle est votre boisson préférée?",
        "À quelle fréquence mangez-vous des repas équilibrés?",
        "Quel est votre niveau de stress quotidien?",
        "Dormez-vous suffisamment chaque nuit?",
        "Quel est votre type d'exercice physique favori?",
        "Avez-vous des restrictions alimentaires?"
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
            border: 3px solid #8F965F;
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
            width: 100px;
            height: 100px;
        }

        label:nth-of-type(2),
        label:nth-of-type(6) {
            width: 75px;
            height: 75px;
        }

        label:nth-of-type(3),
        label:nth-of-type(5) {
            width: 50px;
            height: 50px;
        }

        label:nth-of-type(4) {
            width: 25px;
            height: 25px;
        }

        label.active {
            background-color: #403929 !important;
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
