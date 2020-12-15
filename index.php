<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 6</title>
</head>

<body>
    <h1>Exercice 6 Partie 6</h1>
    <?php if (!isset($_GET['building'])) : ?>
        <p>Numéro de batiment manquant</p>
    <?php endif; ?>
    <?php if (!isset($_GET['room'])) : ?>
        <p>Numéro de chambre manquant</p>
    <?php endif; ?>
    <?php
    if (isset($_GET['building']) && isset($_GET['room'])) : ?>
        <p>Votre numéro de batiment est le <?= $_GET['building'] ?>. Votre chambre <?= $_GET['room'] ?> a été nettoyée Mr Strausskahn. </p>
    <?php endif ?>
    <a href=" index.php?building=12&room=101">Trouver votre réservation</a>
</body>

</html>