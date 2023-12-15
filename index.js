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
        row.style.backgroundColor = '#FF66B2'; // Rose fluo
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


