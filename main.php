
?>

<main>
    <div class="contenu-carrousel">
        <div class="carrousel"  width="350">
        <div><a href=""><img src="http://localhost:8888/harmonie-corporelle/wp-content/uploads/2023/11/imc-5.png"  width="682" alt="IMC"></a></div>
        <div><a href=""><img src="http://localhost:8888/harmonie-corporelle/wp-content/uploads/2023/11/conseil-1.png" width="682" alt="Conseil"></a></div>
        <div><a href=""><img src="http://localhost:8888/harmonie-corporelle/wp-content/uploads/2023/11/Forum.png" width="682" alt="Forum"></a></div>
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

<div class="card" style="width: 18rem;">
  <img src="assets/images/testinsta.jpg" class="card-img-top" alt="Compte insta">
  <div class="card-body">
    <h5 class="card-title">Instagram</h5>
    <p class="card-text">Suivez-nous sur instagram pour des infos en direct !</p>
    <a href="https://instagram.com/harmonie.corporellee?igshid=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr" class="btn btn-primary">Click</a>
  </div>
  <img src="assets/images/testinsta.jpg" class="card-img-top" alt="Compte insta">
  <div class="card-body">
    <h5 class="card-title">Instagram</h5>
    <p class="card-text">Suivez-nous sur instagram pour des infos en direct !</p>
    <a href="https://instagram.com/harmonie.corporellee?igshid=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr" class="btn btn-primary">Click</a>
  </div>
  <img src="assets/images/testinsta.jpg" class="card-img-top" alt="Compte insta">
  <div class="card-body">
    <h5 class="card-title">Experts</h5>
    <p class="card-text">Desirez-vous en savoir plus sur nos experts ?</p>
    <a href="https://instagram.com/harmonie.corporellee?igshid=NGVhN2U2NjQ0Yg%3D%3D&utm_source=qr" class="btn btn-primary">Click</a>
  </div>
</div>