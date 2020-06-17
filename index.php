
<?php include 'faqs.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a41fcd4d62.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div id="header-top">
            <div class='img-wrapper'><img src="img/glogo.png" alt=""></div>
            <h3>Privacy e Termini</h3>
        </div>
        <div id="header-bottom">
            <ul class='menu'>
                <li><a href="">Introduzione</a></li>
                <li><a href="">Norme sulla privacy</a></li>
                <li><a href="">Termini di servizio</a></li>
                <li><a href="">Tecnologie</a></li>
                <li><a href="">Domande Frequenti</a></li>
            </ul>
            <ul>
                <li class="utente">
                    <img src="img/unnamed.jpg" alt="">
                    <a href="">momoramadori@gmail.com</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <?php 
            foreach ($faqs as $question => $answer ) { ?>
            <div class='question'>
                <h2> <?php echo $question; ?> </h2>
                <?php
                foreach ( $answer as $answer_part) { ?>
                    <p> <?php echo $answer_part; ?></p>
                    <?php
                }
                ?>
            </div>
            <?php 
            }
            ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <ul>
                <li><a href="">Google</a></li>
                <li><a href="">Tutto su Google</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Termini</a></li>
            </ul>
            <div>
                <i class="fas fa-globe"></i>
                <select>
                    <option value="">Italiano</option>
                </select>
            </div>
        </div>
    </footer>
</body>
</html>