<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>직업 소개</title>
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/main.css?after">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/footer.css">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/job.css?after">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/header.php"; ?>
    </header>
    <section>
        <h2>직업소개</h2>
        <div>
            <h3>전사</h3>
            <section class="design">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/warlord.php">
                    <img src="./img/warlord.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/destroyer.php">
                    <img src="./img/destroyer.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/berserker.php">
                    <img src="./img/berserker.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/holyknight.php">
                    <img src="./img/holyknight.png">
                </a>
            </section>
        </div>
        <div>
            <h3>무도가</h3>
            <section class="design">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/battlemaster.php">
                    <img src="./img/battlemaster.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/infighter.php">
                    <img src="./img/infighter.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/soulmaster.php">
                    <img src="./img/soulmaster.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/striker.php">
                    <img src="./img/striker.png">
                </a>
            </section>
        </div>
        <div>
            <h3>헌터</h3>
            <section class="design">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/devilhunter.php">
                    <img src="./img/devilhunter.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/blaster.php">
                    <img src="./img/blaster.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/scouter.php">
                    <img src="./img/scouter.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/gunslinger.php">
                    <img src="./img/gunslinger.png">
                </a>
            </section>
        </div>
        <div>
            <h3>마법사</h3>
            <section class="design">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/arcana.php">
                    <img src="./img/arcana.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/bard.php">
                    <img src="./img/bard.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/summoner.php">
                    <img src="./img/summoner.png">
                </a>
            </section>
        </div>
        <div>
            <h3>암살자</h3>
            <section class="design">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/blade.php">
                    <img src="./img/blade.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/demonic.php">
                    <img src="./img/demonic.png">
                </a>
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/reaper.php">
                    <img src="./img/reaper.png">
                </a>
            </section>
        </div>
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/footer.php"; ?>
    </footer>
</body>

</html>