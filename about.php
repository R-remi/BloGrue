<?php
$currentPage = 'data';
$pageTitle = 'Données et mesures - Projet grue';

include 'header.php';
?>

<section class="content-page">
    <h1>Données et mesures</h1>

    <h2>1. Calcul de la Charge : 300 grammes</h2>
    <p>
        Pour simuler une charge réelle de 300 kg sur notre maquette à l'échelle 1:10, nous avons dû réduire la masse par le cube de l'échelle (10³ = 1000), car le poids dépend du volume.
    </p>
    <p>
        La charge imposée étant de 340g, nous avons calculé la force correspondante en Newton : Wc = mc * g = 0.340 * 9.81 = 3.3354 N.
    </p>
    <h2>2. L'Équilibre des Moments</h2>
    <p>
        Pour ne pas basculer, la grue doit équilibrer deux forces opposées, comme sur une balançoire. C'est le principe des moments.
    </p>
    <ul>
        <li><strong>Moment Renversant :</strong> La force de la charge de 300 g qui tente de faire basculer la grue.</li>
        <li><strong>Moment Stabilisant :</strong> La force du poids de la structure de la grue qui la maintient au sol.</li>
    </ul>
    <p>
        Pour que notre grue soit stable, il faut que le <strong>moment stabilisant soit toujours supérieur au moment renversant.</strong> Nos calculs ont validé que cette condition est respectée, garantissant que notre grue ne basculera pas (théoriquement).
    </p>
    <img src="img/calculs.jpeg" alt="Photo des calculs manuscrits" class="hero-image"">


</section>

<?php include 'footer.php'; ?>