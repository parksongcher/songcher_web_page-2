<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/db/db_connect.php";
    session_start();
    if (isset($_SESSION["userlevel"])&& $_SESSION["userlevel"] != 1 )
    {
        echo("
            <script>
            alert('관리자가 아닙니다! 회원정보 수정은 관리자만 가능합니다!');
            history.go(-1)
            </script>
        ");
        exit;
    }

    $num   = $_GET["num"];
    // 멤버 테이블에서 num을 삭제한다
    $sql = "delete from lostark where num = $num";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "
            <script>
                alert('삭제실패');
                history.go(-1)
            </script>
        ";
    } else {
        echo "
            <script>
                alert('삭제완료');
                location.href = 'admin.php';
            </script>
        ";
    }

    mysqli_close($con);

    echo "
            <script>
                location.href = 'admin.php';
            </script>
    ";
?>

