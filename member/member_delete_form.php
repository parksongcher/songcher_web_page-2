<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>회원탈퇴</title>
    <link rel="stylesheet" type="text/css" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/main.css?after">
    <link rel="stylesheet" type="text/css" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/member/css/member_delete_form.css?after">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/footer.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/member/js/member.js" defer></script>
    <script src="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/js/common.js" defer></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/header.php"; ?>
    </header>
    <section>
        <div id="main_content">
            <div id="join_box">
                <h2>정말 회원탈퇴를 하시겠습니까?</h2>
                <form name="member_form" method="post" action="./member_delete.php">
                    <input type="hidden" name="id" value="<?= $userid ?>">
                    <br><br>
                    <div id="check">
                        <input type="submit" value="확인">
                    </div>
                </form>
            </div> <!-- join_box -->
        </div> <!-- main_content -->
    </section>
    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/footer.php"; ?>
    </footer>
</body>

</html>