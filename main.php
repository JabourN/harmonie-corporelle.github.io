<?php
$firstImage = "imc-5.png";
$secondImage = "Conseil.png";
$thirdImage = "Forum.png";

// Array of URLs corresponding to each image
$imageUrls = [
    "imc.php",
    "conseil.php",
    "forum.php"
];
?>

<main>
    <div class="contenu-carrousel">
        <div class="carrousel">
            <div><a href="<?php echo $imageUrls[0]; ?>"><img src="assets/images/<?php echo $firstImage; ?>" alt="IMC"></a></div>
            <div><a href="<?php echo $imageUrls[1]; ?>"><img src="assets/images/<?php echo $secondImage; ?>" alt="Conseil"></a></div>
            <div><a href="<?php echo $imageUrls[2]; ?>"><img src="assets/images/<?php echo $thirdImage; ?>" alt="Forum"></a></div>
        </div>
    </div>
    <div class="controle">
        <button onclick="carrousel('-')">❮</button>
        <button onclick="carrousel('')">❯</button>
    </div>
</main>

<script>
var angle = 0;
var currentImage = 0;
var images = [
    "imc-5.png",
    "Conseil.png",
    "Forum.png"
];
var imageUrls = [
    "imc.php",
    "conseil.php",
    "forum.php"
];

document.addEventListener("DOMContentLoaded", function () {
    var imageElements = document.querySelectorAll(".carrousel img");
    imageElements.forEach(function(element, index) {
        element.addEventListener("click", function() {
            window.location.href = imageUrls[index];
        });
    });
});

function carrousel(sign) {
    var spinner = document.querySelector(".carrousel");

    if (!sign) {
        angle -= 120;
        currentImage = (currentImage + 1) % images.length;
    } else {
        angle += 120;
        currentImage = (currentImage - 1 + images.length) % images.length;
    }

    spinner.style.transform = "rotateY(" + angle + "deg)";
}
</script>
