<meta charset='utf-8'>
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/db/db_connect.php";
    //사용자가 임으로 URL 통해서 get 방식으로 잘못된 행동을 처리했을때 방어
    if ($_SERVER["REQUEST_METHOD"] != "POST") alert_back("method 방식이 올바르지 않습니다.");

    if (!isset($_POST["send_id"])) alert_back("send_id 값이 존재하지 않습니다.");
    if (!isset($_POST["rv_id"])) alert_back("rv_id 값이 존재하지 않습니다.");
    if (!isset($_POST["subject"])) alert_back("subject 값이 존재하지 않습니다.");
    if (!isset($_POST["content"])) alert_back("content 값이 존재하지 않습니다.");

    $send_id = $_POST["send_id"];   //보내는 사람
    $rv_id = $_POST['rv_id'];       //받는 사람
    $subject = $_POST['subject'];   //쪽지 주제
    $content = $_POST['content'];   //쪽지 내용

    $subject=input_set($subject);
    $content=input_set($content);

    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    //로그인을 하지 않았을때 되돌린다.
    if (!$send_id) alert_back('로그인 후 이용해 주세요!');

	//받는 사람이 멤버 테이블에 실제로 존재하는지 점검
    $sql = "select * from members where id='$rv_id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if ($num_record) {
        $sql = "insert into message (send_id, rv_id, subject, content,  regist_day) ";
        $sql .= "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
        mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    } else {
        alert_back('받는사람 아이디가 존재하지 않습니다.');
        exit;
    }

    mysqli_close($con);                // DB 연결 끊기

    echo "
	   <script>
	    location.href = 'message_box.php?mode=send';
	   </script>
	";
?>

  
