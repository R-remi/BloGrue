<?php
$currentPage = 'index';
$pageTitle = 'Projet grue';

// Charger les articles depuis le fichier JSON
$articles = json_decode(file_get_contents('articles.json'), true);

// Fonction pour formater la date en français
function formatDateFr($dateStr) {
    $date = new DateTime($dateStr);
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    return $formatter->format($date);
}

include 'header.php';
?>

<section class="hero">
    <h1>Bienvenue sur notre blog</h1>
    <p>Étapes clé de la conception de la grue</p>
</section>

<section class="articles">
    <?php foreach ($articles as $article): ?>
        <article class="article-card">
            <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
            <p class="meta"><?php echo formatDateFr($article['date']); ?></p>
            <p><?php echo htmlspecialchars($article['contenu']); ?></p>
        </article>
    <?php endforeach; ?>
</section>

<?php include 'footer.php'; ?>
