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
    <img src="img/photo_random.jpg" alt="photo random" class="hero-image">
</section>

<section class="articles">
    <?php foreach ($articles as $article): ?>
        <a href="article.php?id=<?php echo $article['id']; ?>" class="article-link">
            <article class="article-card" style="background-color: <?php echo htmlspecialchars($article['background']); ?>;">
                <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
                <p class="meta"><?php echo formatDateFr($article['date']); ?></p>
                <p class="article-preview">
                    <?php echo htmlspecialchars(mb_substr($article['contenu'], 0, 100)); ?>...
                </p>
            </article>
        </a>
    <?php endforeach; ?>
</section>

<?php include 'footer.php'; ?>