<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/harmonie-corporelle/">Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/harmonie-corporelle/publierquestion/">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost:8888/harmonie-corporelle/forum/">Mes questions</a>
        </li>
       </ul>
       <!-- Image Trigger for Pop-up -->
<p src="<?php echo get_template_directory_uri(); ?>/assets/images/connexion.png " alt="connexion" id="open-popup-image">Se connecter</p>

<!-- Pop-up Container -->
<div id="popup-container" class="popup">
    <span class="close" onclick="closePopup()">&times;</span>

    <!-- Content Loaded via AJAX from forum URL -->
    <div id="popup-content"></div>
</div>

<!-- JavaScript for Pop-up -->
<script>
    // JavaScript for Opening and Closing Pop-up
    document.getElementById("open-popup-image").addEventListener("click", function() {
        openPopup();
        loadContentFromForumURL();
    });

    function openPopup() {
        document.getElementById("popup-container").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup-container").style.display = "none";
    }

    // AJAX to Load Content from forum URL
    function loadContentFromForumURL() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("popup-content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "http://localhost:8888/harmonie-corporelle/connexion/", true);
        xhttp.send();
    }
</script>
    </div>
  </div>
</nav>