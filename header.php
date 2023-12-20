<!-- header -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet"> -->
  <script src="<?php echo get_template_directory_uri(); ?>/index.js"></script>

  
     <title><?php bloginfo('title'); ?></title>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?> >
<header>

<style>
        /* Styles for Pop-up Container */
        .popup {
        display: none;
        position: fixed;
        top: 10px;
        left: 10px; /* Ajuster la distance depuis la gauche */
        border: 1px solid #ccc;
        padding: 20px;
        background: #fff;
        z-index: 1;
        width: 20cm;
        height: 10cm;
        overflow: auto;
    }

        /* Style for Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Style for Connexion Button */
   /* Style for Connexion Button */
#connexion-button {
    background-color: #e8dec600 ;
    color:#8F965F ; /* Change the text color to match the background */
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    transition: color 0.3s; /* Apply transition to text color */
}

#connexion-button:hover {
    color: #403929; /* Change text color on hover */
}



        /* Additional Styles as Needed */
    </style>
</head>
<body>

    <!-- Bouton Connexion -->
    <button id="connexion-button" onclick="openPopup()">Connexion</button>

    <!-- Pop-up Container -->
    <div id="popup-container" class="popup">
        <span class="close" onclick="closePopup()">&times;</span>
        <!-- Content Loaded via AJAX from forum URL -->
        <div id="popup-content"></div>
    </div>

    <!-- JavaScript for Pop-up -->
    <script>
        // JavaScript for Opening and Closing Pop-up
        function openPopup() {
            document.getElementById("popup-container").style.display = "block";
            loadContentFromForumURL();
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
            xhttp.open("GET", <?= home_url('connexion'); ?>, true);
            xhttp.send();
        }
    </script>

<!-- Le logo -->
<div class="text-center mb-4">
    <a href="<?php echo home_url(); ?>">
        <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOHCV.png" alt="Brand logo | <?php bloginfo('title'); ?>" style="max-width: 120px; height: auto;" />
    </a>
</div>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-transparent w-100 mt-2">
        <!-- Bouton de basculement pour les écrans plus petits -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu du menu -->
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <?php
            wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => 'navbar-nav mb-2 mb-lg-0',
                'walker' => new Bootstrap_Walker_Nav_Menu(),
            ]);
            ?>
        </div>
    </nav>
</div>

<?php
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
}
?>


<!-- NAVBAR 

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
</nav>-->

</header>