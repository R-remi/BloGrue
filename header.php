<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Projet grue'; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">CESI</div>
            <ul class="nav-links">
                <li><a href="index.php" class="<?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="equipe.php" class="<?php echo ($currentPage == 'equipe') ? 'active' : ''; ?>">Équipe</a></li>
                <li><a href="page1.php" class="<?php echo ($currentPage == 'page1') ? 'active' : ''; ?>">A propos de la grue</a></li>
                <li><a href="page2.php" class="<?php echo ($currentPage == 'page2') ? 'active' : ''; ?>">Donées et mesures</a></li>
            </ul>
        </nav>
    </header>

    <main>
