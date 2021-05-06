<?php
//데이터 베이스 연동  및 lostark 테이블 생성
include_once $_SERVER['DOCUMENT_ROOT'] . '/psctest/songcher_web_site/db/db_connect.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/psctest/songcher_web_site/db/create_table.php';
create_table($con, 'lostark');

$user_nick = input_set($_POST['user_nick']);
$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$user_pass1 = $_POST['user_pass1'];
$user_pass2 = $_POST['user_pass2'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];

$regist_day = date('Y-m-d (H:i)');
// 현재의 '년-월-일-시-분'을 저장

$sql = 'insert into lostark(nick, name, id, pass1, pass2, email, phone, regist_day, level, point) ';
//내 정보 변경 할 값들 이곳에 넣아야함
$sql .= "values('$user_nick', '$user_name', '$user_id', '$user_pass1', '$user_pass2', '$user_email', '$user_phone', '$regist_day', 1, 10)";

$insert_result = mysqli_query($con, $sql);
// $sql 에 저장된 명령 실행
mysqli_close($con);

if ($insert_result === false) {
    alert_back('삽입이 잘못 되었습니다. 다시 입력요청합니다. ');
} else {
    echo "
        <script>
             alert('회원가입을 축하합니다.');
             location.href = 'http://{$_SERVER['HTTP_HOST']}/psctest/songcher_web_site/index.php';
        </script>
        ";
}
