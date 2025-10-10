<?php
$currentPage = 'index';
$pageTitle = 'Projet grue';

// Charger les articles depuis le fichier JSON
$articles = json_decode(file_get_contents('articles.json'), true);

// Fonction pour formater la date en français
function formatDateFr($dateStr)
{
    $date = new DateTime($dateStr);
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    return $formatter->format($date);
}

include 'header.php';
?>

<section class="hero">
    <h1>Blog du Projet Grue</h1>
    <img src="img/photo_hero.jpeg" alt="photo hero page" class="hero-image">
</section>

<section class="articles">
    <?php foreach ($articles as $article): ?>
        <a href="article.php?id=<?php echo $article['id']; ?>" class="article-link">
            <article class="article-card"
                style="background-color: <?php echo htmlspecialchars($article['background']); ?>;">
                <h2><?php echo htmlspecialchars($article['titre']); ?></h2>
                <p class="meta"><?php echo formatDateFr($article['date']); ?></p>
                <p class="article-preview">
                    <?php
                    // Pour afficher l'aperçu , la ligne de code ci-dessous peut être remplacée par :
                    // strip_tags($article['contenu']) : Supprime toutes les balises HTML (comme <img /> ou <p>) du contenu de l'article, ne laissant que le texte brut.
                    // mb_substr(..., 0, 100) : Prend le texte brut obtenu et le coupe pour ne garder que les 100 premiers caractères.
                    // htmlspecialchars(...) : Convertit les caractères spéciaux (ex: <, >, &) en entités HTML pour sécuriser l'affichage et éviter toute injection de code.
                    echo htmlspecialchars(mb_substr(strip_tags($article['contenu']), 0, 100));

                    ?>...
                </p>
            </article>
        </a>
    <?php endforeach; ?>
</section>

<?php include 'footer.php'; ?>