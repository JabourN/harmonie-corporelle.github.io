<!-- header -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/index.js"></script>

  
     <title><?php bloginfo('harmonie-corporelle'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<header>

<style>
        /* Styles for Pop-up Container */
        .popup {
            display: none;
            position: fixed;
            top: 10px; /* Ajuster la distance depuis le haut */
            right: 10px; /* Ajuster la distance depuis la droite */
            border: 1px solid #ccc;
            padding: 20px;
            background: #fff;
            z-index: 1;
            width: 20cm; /* Set the width of the pop-up */
            height: 10cm; /* Set the height of the pop-up */
            overflow: auto; /* Add overflow for scrolling if needed */
        }

        /* Style for Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Style for Image Trigger */
        #open-popup-image {
            position: fixed;
            top: 10px; /* Ajuster la distance depuis le haut */
            right: 10px; /* Ajuster la distance depuis la droite */
            cursor: pointer;
        }

        /* Additional Styles as Needed */
    </style>
</head>
<body>

<!-- Image Trigger for Pop-up -->
<img width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/maison.png " alt="Maison" id="open-popup-image">


<!-- Les icônes -->
<div class="container">
    <div class="row row-cols-auto">
        <div class="col">
            <a class="icon-link" href="https://www.instagram.com/harmonie.corporellee/">
                <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_INSTAGRAM.png ">
            </a>
        </div>
        <div class="col">
            <a class="icon-link" href="https://pin.it/7KwgCRX">
                <img width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PINTEREST.png ">
            </a>
        </div>
        <div class="col">
            <a class="icon-link" href="#">
                <img width="30" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PODCAST.png ">
            </a>
        </div>
    </div>
</div>

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
        xhttp.open("GET", "http://localhost:8888/harmonie-corporelle/inscription/", true);
        xhttp.send();
    }
</script>

<!-- Le logo -->
<div class="text-center">
    <a href="<?php echo home_url(); ?>">
        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
        alt="Brand logo | <?php bloginfo('title'); ?>" style="max-width: 170px; height: auto;" />
    </a>
</div>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg justify-content-center">
    <div class="container-fluid">
        <ul class="nav justify-content-center mx-auto my-2 mx-5">
                <?php wp_nav_menu([
                  'theme_location' => 'header', // localisation de mon menu
                  'container' => false, // permet de retirer mon container
                  'menu_class' => 'navbar-nav' // la classe que je veux dans mon <ul></ul>
                ]); ?>
           </ul>
    </div>
</nav>

</header>