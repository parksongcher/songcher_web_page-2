<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/psctest/songcher_web_site/db/db_connect.php';

$login_flag = false;
if (!isset($_POST['id']) || empty($_POST['id'])) {
  $login_flag = false;
} else if (!isset($_POST['pass']) || empty($_POST['pass'])) {
  $login_flag = false;
}

if ($login_flag == true) {
  echo ("
      <script>
        window.alert('아이디와 패스워드 정확하게 입력요청합니다.');
        history.go(-1);
      </script>
    ");
}
// login_form.php에 name값이랑 이름이 같아야함
$id   = $_POST['id'];
$pass = $_POST['pass'];

//멤버테이블에서 아이디 같은 레코드 추출-> $result
$sql = "select * from lostark where id='$id' and pass1='$pass'";
$result = mysqli_query($con, $sql);

//레코드 추출내용 갯수 파악
$num_match = mysqli_num_rows($result);

//추출내용이 없으면 0 => false
if (!$num_match) {
  echo ("
           <script>
             window.alert('아이디와 패스워드 바르게 입력요망!');
             history.go(-1);
           </script>
         ");
} else {
  //레코드 추출에서 첫번째 레코드를 연관배열로 가져온다. $row['id']~~ $row['level']
  $row = mysqli_fetch_array($result);

  //세션값을 할당한다.
  session_start();
  $_SESSION['userid'] = $row['id'];
  $_SESSION['username'] = $row['name'];
  $_SESSION["userlevel"] = $row["level"];

  mysqli_close($con);

  echo ("
          <script>
            location.href = 'http://{$_SERVER["HTTP_HOST"]}/psctest/songcher_web_site/index.php';
          </script>
        ");
}
