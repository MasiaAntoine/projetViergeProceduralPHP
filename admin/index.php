<?php 
    include_once $_SERVER['DOCUMENT_ROOT'].'/assets/config/functions.inc.php';
    session_start();
    isConnect();
    isAdmin();
?>

<!DOCTYPE html>
<html lang="<?= $defaultLanguage; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Empêche la page d'être indexé sur Google -->
    <meta name="robots" content="noindex">

    <link rel="icon" type="image/png" href="/asset/images/icons/icon.png" />
    <link rel="stylesheet" href="/asset/css/styles.css">

    
    <title>Accueil</title>
</head>
<body>
    <?php include_once($headerAdminPath); ?>

    <h1>Hello world!</h1>

    <?php include_once($footerAdminPath); ?>

    <script src="/asset/js/app.js"></script>
</body>
</html>
