<?php get_header(); ?>
<main>

<style>
        input[type="radio"] {
            display: none; /* Masquer les boutons radio par défaut */
        }

        label {
            display: inline-block;
            width: 30px; /* Ajuster la largeur selon vos besoins */
            height: 30px; /* Ajuster la hauteur selon vos besoins */
            background-color: #ccc; /* Couleur de fond par défaut */
            border-radius: 50%; /* Pour obtenir une forme de cercle */
            margin: 5px; /* Ajuster la marge selon vos besoins */
            cursor: pointer;
        }

        /* Taille spécifique pour chaque étiquette */
        label:nth-child(1), label:nth-child(7) {
            width: 100px;
            height: 100px;
        }

        label:nth-child(2), label:nth-child(6) {
            width: 75px;
            height: 75px;
        }

        label:nth-child(3), label:nth-child(5) {
            width: 50px;
            height: 50px;
        }

        label:nth-child(4) {
            width: 5px;
            height: 5px;
        }

        input[type="radio"]:checked + label {
            background-color: #009688; /* Couleur de fond lorsque sélectionné */
        }
    </style>
</head>
<body>

<h2>Questionnaire sur la consommation d'eau</h2>

<form>
    <label for="frequency1"></label>
    <input type="radio" name="frequency" value="1" id="frequency1">

    <label for="frequency2"></label>
    <input type="radio" name="frequency" value="2" id="frequency2">

    <label for="frequency3"></label>
    <input type="radio" name="frequency" value="3" id="frequency3">

    <label for="frequency4"></label>
    <input type="radio" name="frequency" value="4" id="frequency4">

    <label for="frequency5"></label>
    <input type="radio" name="frequency" value="5" id="frequency5">

    <label for="frequency6"></label>
    <input type="radio" name="frequency" value="6" id="frequency6">

    <label for="frequency7"></label>
    <input type="radio" name="frequency" value="7" id="frequency7">

    <button type="button" onclick="submitForm()">Soumettre</button>
</form>


<script>
    function submitForm() {
        // Récupérer la valeur sélectionnée
        var frequencyValue = document.querySelector('input[name="frequency"]:checked');

        // Vérifier si une option est sélectionnée
        if (frequencyValue) {
            alert("Vous avez sélectionné la fréquence : " + frequencyValue.value);
            // Vous pouvez ajouter ici le code pour envoyer les données à votre serveur, par exemple.
        } else {
            alert("Veuillez sélectionner une fréquence.");
        }
    }
</script>

</main>
</html>

          
<?php get_footer() ?>