<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Projet grue'; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WV60FWGCKP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-WV60FWGCKP');
    </script>

</head>

<body>
    <header>
        <nav>
            <div class="logo">CESI</div>
            <ul class="nav-links">
                <li><a href="index.php" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Accueil</a>
                </li>
                <li><a href="equipe.php" class="<?php echo ($currentPage == 'equipe') ? 'active' : ''; ?>">Équipe</a>
                </li>
                <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">A propos de la
                        grue</a></li>
                <li><a href="data.php" class="<?php echo ($currentPage == 'data') ? 'active' : ''; ?>">Donées et
                        mesures</a></li>
            </ul>
        </nav>
    </header>

    <main>