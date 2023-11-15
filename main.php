<?php
$firstImage = "imc-5.png";
$secondImage = "Conseil.png";
$thirdImage = "Forum.png";
?>

<main>
    <div class="contenu-carrousel">
        <div class="carrousel">
            <div><img src="assets/images/<?php echo $firstImage; ?>" alt="IMC"></div>
            <div><img src="assets/images/<?php echo $secondImage; ?>" alt="Conseil"></div>
            <div><img src="assets/images/<?php echo $thirdImage; ?>" alt="Forum"></div>
        </div>
    </div>
    <div class="controle">
        <button onclick="carrousel('-')">❮</button>
        <button onclick="carrousel('')">❯</button>
    </div>
</main>

<script>
var angle = 0;
var currentImage = 0; // Index of the currently displayed image
var images = [
    "imc-5.png",
    "Conseil.png",
    "Forum.png"
];

function carrousel(sign) {
    var spinner = document.querySelector(".carrousel");

    if (!sign) {
        angle = angle + 60;
        currentImage = (currentImage + 1) % images.length;
    } else {
        angle = angle - 60;
        currentImage = (currentImage - 1 + images.length) % images.length;
    }

    spinner.setAttribute("style", "transform:rotateY(" + angle + "deg);");
    updateImage();
}

function updateImage() {
    var imageElements = document.querySelectorAll(".carrousel img");
    imageElements.forEach(function(element, index) {
        if (index === currentImage) {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    });
}
</script>
