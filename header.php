<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "1";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar_logo">
            <i class="fas fa-school"></i>
            <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/index.php">
                <img src="https://cdn.discordapp.com/attachments/643013422060929034/834453791864520713/i8293549818.png">
            </a>
        </div>
        <ul class="navbar_menu">
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/hpIntrduction/hPIntrduction.php">로스트아크 소개</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/jobIntroduction/job_introduction.php">직업소개</a></li>
            <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/psctest/songcher_web_site/memo/message_box.php?mode=rv">쪽지</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/board/board_list.php">커뮤니티</a></li>
            <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/image_board/board_list.php">이미지 게시판</a></li>
        </ul>
        <ul class="navbar_icons">
            <?php
            if (!$userid) {
            ?>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/member/member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/login/login_form.php">로그인</a></li>
            <?php
            } else {
                $logged = "{$username} ({$userid})님[권한:{$userlevel}등급]";
            ?>
                <li><?= $logged ?> </li>
                <li> | </li>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/login/logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/member/member_modify_form.php">정보 수정</a></li>
                <li> | </li>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/member/member_delete_form.php">회원 탈퇴</a></li>
            <?php
            }
            ?>
            <?php
            if ($userlevel == 1) {
            ?>
                <li> | </li>
                <li><a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/admin/admin.php">관리자 모드</a></li>
            <?php
            }
            ?>
        </ul>
        <a href="#" class="navbar_toggle"><i class="fas fa-bars"></i></a>
    </nav>
</body>

</html>