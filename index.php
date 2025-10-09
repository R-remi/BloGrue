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
        <article class="article-card" style="background-color: <?php echo htmlspecialchars($article['background']); ?>;" onclick="toggleArticle(<?php echo $article['id']; ?>)">
            <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
            <p class="meta"><?php echo formatDateFr($article['date']); ?></p>
            <p class="article-preview" id="preview-<?php echo $article['id']; ?>">
                <?php echo htmlspecialchars(mb_substr($article['contenu'], 0, 69)); ?>...
            </p>
            <p class="article-full" id="full-<?php echo $article['id']; ?>" style="display: none;">
                <?php echo htmlspecialchars($article['contenu']); ?>
            </p>
        </article>
    <?php endforeach; ?>
</section>

<script>
function toggleArticle(id) {
    const preview = document.getElementById('preview-' + id);
    const full = document.getElementById('full-' + id);
    
    if (full.style.display === 'none') {
        preview.style.display = 'none';
        full.style.display = 'block';
    } else {
        preview.style.display = 'block';
        full.style.display = 'none';
    }
}
</script>

<?php include 'footer.php'; ?>
