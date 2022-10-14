<?php 
    include_once $_SERVER['DOCUMENT_ROOT'].'/assets/config/functions.inc.php';
    session_start();

    //Exemple pour récupérer utiliser une function dans le fichier functions.inc.php
    $data = selectAll();
?>


<!DOCTYPE html>
<html lang="<?= $defaultLanguage; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Apparaitre sur le moteur de recherche"/>
    <meta name="keywords" content="mot, clef, de, recherche"/>
    <meta name="author" content="Masia Antoine" />
    <meta name="copyright" content="Masia Antoine" />

    <link rel="icon" type="image/png" href="/asset/images/icons/icon.png" />
    <link rel="stylesheet" href="/asset/css/styles.css">

    
    <title>Accueil</title>
</head>
<body>
    <?php include_once($headerPath); ?>

    <h1>Hello world!</h1>

    <div>Data :</div>
    <!-- Exemple pour afficher des données -->
    <?php foreach($data as $d): ?>
        <div><?= $d["LblGrade"]; ?></div>
    <?php endforeach; ?>

    <?php include_once($footerPath); ?>

    <script src="/asset/js/app.js"></script>
</body>
</html>