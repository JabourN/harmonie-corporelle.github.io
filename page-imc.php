<?php get_header(); ?>
<body>
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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imc1.png" class="d-block w-100" alt="Conseil">
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


    <h3>⚖️ Calcualtrice de l'IMC :</h3>
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


    <span id="now"></span>
    <p id="greeting"></p>

    <textarea id="text" disabled="disabled">Note la date, ton poids, ta taille, ton imc pour visualiser évolution :</textarea>
    <br />
    <i><input type="button" id="btn" value="Sauvegarde" /></i>

    <script>
        document.getElementById("btn").addEventListener("click", function () {
            var text = document.getElementById("text").value;
            var filename = "SB&B_evolution.txt";
            var element = document.createElement('a');
            element.setAttribute('href','data:text/plain;charset=utf-8, ' + encodeURIComponent(text));
            element.setAttribute('download', filename);
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        }, false);

        function now(id) {
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1; // January is 0
            var year = date.getFullYear();
            var hours = date.getHours();
            var minutes = date.getMinutes();

            var result = 'Date: ' + day + '/' + month + '/' + year + ' - Time: ' + hours + ':' + minutes;
            document.getElementById(id).innerHTML = result;
            setTimeout(function() { now(id); }, 1000);
        }

        window.onload = function() {
            now('now');
        };

        function AfficheImc() {
            var poids = parseFloat(document.getElementById("poids").value);
            var taille = parseFloat(document.getElementById("taille").value) / 100; // Convertir en mètres
            var imc = poids / (taille * taille);
            var Lataille = taille;
            var Lepoids = poids;

            document.getElementById("imc").value = imc.toFixed(2);
            document.getElementById("Lataille").value = Lataille.toFixed(2);
            document.getElementById("Lepoids").value= Lepoids.toFixed(2);

            var corpullence = imc.toFixed(2);

            if (corpullence <= 16.5) {
                document.getElementById("corpullence").value = 'vous êtes en dénutrition.';
            } else if (corpullence <= 18.5) {
                document.getElementById("corpullence").value = 'vous êtes en maigreur.';
            } else if (corpullence <= 25) {
                document.getElementById("corpullence").value = 'vous avez un poids normal.';
            } else if (corpullence <= 30) {
                document.getElementById("corpullence").value = 'vous êtes en surpoids.';
            } else if (corpullence <= 35) {
                document.getElementById("corpullence").value = 'vous êtes en obésité modérée.';
            } else if (corpullence <= 40) {
                document.getElementById("corpullence").value = ' vous êtes en obésité sévère.';
            } else {
                document.getElementById("corpullence").value = 'vous êtes en obésité morbide ou massive.';
            }

            var Dénutrition  = "Moins de " + Math.floor((16.5) * (taille * taille));
            document.getElementById("Dénutrition").value = Dénutrition;

            var Maigreur  = "De " + Math.floor((16.5) * (taille * taille)) + " à " + Math.floor((18.5) * (taille * taille));
            document.getElementById("Maigreur").value = Maigreur;

            var Poidnormal = "De " + Math.floor((18.5) * (taille * taille)) + " à " + Math.floor((25) * (taille * taille));
        document.getElementById("Poidnormal").value = Poidnormal;

        var Surpoids = "De " + Math.floor((25) * (taille * taille)) + " à " + Math.floor((30) * (taille * taille));
        document.getElementById("Surpoids").value = Surpoids;

        var Obésitémodérée = "De " + Math.floor((30) * (taille * taille)) + " à " + Math.floor((35) * (taille * taille));
        document.getElementById("Obésitémodérée").value = Obésitémodérée;

        var Obésitésévère = "De " + Math.floor((35) * (taille * taille)) + " à " + Math.floor((40) * (taille * taille));
        document.getElementById("Obésitésévère").value = Obésitésévère;

        var ObésitéMorbideOuMassiv = "Plus de " + Math.floor((40) * (taille * taille));
        document.getElementById("ObésitéMorbideOuMassiv").value = ObésitéMorbideOuMassiv;        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h3 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        input {
            width: 60px;
        }

        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            background-color: #4CAF50;

        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        thead {
            background-color: #f2f2f2;
        }

        textarea {
            width: 100%;
            margin-top: 10px;
        }

        #btn {
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>

<!-- Reste du code HTML/PHP -->

</body>


          
