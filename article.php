<?php

$currentPage = 'index';
include 'header.php';

function formatDateFr($dateStr)
{
    $date = new DateTime($dateStr);
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    return $formatter->format($date);
}

// Si la requete contient un id d'article
if (isset($_GET['id'])) {
    $articleId = $_GET['id'];
    // On cherche dans le json l'article correspondant
    $articles = json_decode(file_get_contents('articles.json'), true);
    $foundArticle = null;
    foreach ($articles as $article) {
        if ($article['id'] == $articleId) {
            $foundArticle = $article;
            break;
        }
    }

    if ($foundArticle) {
        $pageTitle = htmlspecialchars($foundArticle['titre']);
        echo '<main class="article-container">';
        echo '<article class="full-article-content" style="border-color: ' . htmlspecialchars($foundArticle['background']) . ';">';
        echo '<h1>' . htmlspecialchars($foundArticle['titre']) . '</h1>';
        echo '<p class="meta">' . formatDateFr($foundArticle['date']) . '</p>';
        
        // --- MODIFICATION ICI ---
        // On affiche directement le contenu HTML du JSON
        echo '<div class="article-body">' . $foundArticle['contenu'] . '</div>';
        
        echo '<a href="index.php" class="back-link">← Retour aux articles</a>';
        echo '</article>';
        echo '</main>';

    } else {
        echo '<main class="article-container"><p>Article non trouvé.</p></main>';
    }
} else {
    echo '<main class="article-container"><p>Aucun article sélectionné.</p></main>';
}
include 'footer.php';
?>