<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 6</title>
</head>

<body>
    <h1>Exercice 6 Partie 6</h1>
    <?php
    if (isset($_GET['building']) && isset($_GET['room'])): ?>
        <p><?= $_GET['building'] . ' ' . $_GET['room']; ?></p>
    <?php endif ?>
</body>

</html>