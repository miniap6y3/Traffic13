<?php
error_reporting(-1);

require '../vendor/autoload.php';
use app\Page;

$pages = new Page();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<header><?php require __DIR__."/header.php" ?></header>
<body>
        <?php require __DIR__."/top-menu.php" ?>
        <?php $pages->getPageUrl($_SERVER["REQUEST_URI"]) ?>
</body>
<footer><?php require __DIR__."/footer.php" ?></footer>
</html>