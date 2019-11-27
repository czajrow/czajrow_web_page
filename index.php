<!DOCTYPE html>
<?php include "config/config.php" ?>
<html lang="pl">
<head>
    <!--    <title>Bootstrap Example</title>-->
    <title><?= $pagetitle['title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/myStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-xs-12">
    <?php
    include "modules/navigation-bar.php";

    $parts = parse_url($_SERVER['REQUEST_URI']);
    if ($parts['query']) {
        parse_str($parts['query'], $query);
        $currentPage = $query['page'];
        $currentPageFile = "./modules/pages/" . $currentPage . ".php";
        if (file_exists($currentPageFile)) {
            include $currentPageFile;
        } else {
            include "./modules/pages/err404.php";
        }
    } else {
        echo "nie ma";
        header("Location: ./?page=home");
        exit;
    }

    include "modules/footer.php";
    ?>
</div>
</body>
</html>
