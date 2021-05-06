<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/db/db_connect.php";

session_start(); //이 안에서 CURD를 하는 것과 같음. 선언하는 것임.
if (isset($_SESSION["userlevel"]) && $_SESSION["userlevel"] != 1) //여기선 읽겟다는거랭
{
    echo ("
            <script>
            alert('관리자가 아닙니다! 회원정보 수정은 관리자만 가능합니다!');
            history.go(-1)//
            </script>
        ");
    exit;
}

$num   = $_POST["num"];
$level = $_POST["level"];
$point = $_POST["point"];

// 멤버라는 해당되는 넘버값을 찾아서 테이블에서 레벨과 포인트를  값을 수정해라.
$sql = "update lostark set level=$level, point=$point where num=$num";
//결과값 을 받아야함
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "
	     <script>
            alert('수정실패');
            history.go(-1)
	     </script>
	   ";
} else {
    echo "
        <script>
            alert('수정완료');
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
