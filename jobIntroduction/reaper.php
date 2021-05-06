<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/main.css?after">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/footer.css">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/job.css?after">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/header.php"; ?>
    </header>
    <section>
        <div class="intro">
            <img src="./img/reaper_intro.png">
        </div>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/footer.php"; ?>
    </footer>
</body>

</html>