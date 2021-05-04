<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$cit = "Come diceva Zarathustra: nella vita, che tu cammini e ti muovi, o siedi e aspetti, prima o poi uno stronzo lo incontri.";
$badword = $_GET["badword"];
// ?badword=stronzo
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- /Google fonts -->
    <link rel="stylesheet" href="css/style.css">
    <title>BadWords</title>
</head>

<body>
    <h1>Censored</h1>
    <?php if (empty($badword)) : ?>
    <div class="text">
        <h2>Testo Originale:</h2>
        <p class="text__original"><?php echo $cit; ?></p>
    </div>
    <?php endif; ?>
    <?php if (!empty($badword)) : ?>
    <div class="text">
        <h2>Testo Censurato:</h2>
        <p class="text__censored"><?php echo str_replace($badword, "***", $cit); ?></p>
    </div>
    <?php endif; ?>
    <div class="text">
        <h2><?php echo 'Numero di caratteri: '  . strlen($cit); ?></h2>
    </div>
</body>

</html>