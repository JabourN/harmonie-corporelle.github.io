<?php get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
        }

        main {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        #topics, #comments {
            width: 45%;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Mon Forum</title>
</head>
<body>
    <header>
        <h1>Mon Forum</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="profile.php">Profil</a></li>
                <li><a href="messages.php">Messages</a></li>
                <li><a href="logout.php">Déconnexion</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="topics">
            <!-- Afficher la liste des sujets -->
        </section>

        <section id="comments">
            <!-- Afficher les commentaires du sujet sélectionné -->
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Mon Forum</p>
    </footer>
</body>
</html>
<?php get_footer();?>
