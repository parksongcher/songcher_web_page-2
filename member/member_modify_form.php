<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>정보 수정</title>
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/main.css?after">
    <link rel="stylesheet" href="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/member_modify_form.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/member/js/member.js" defer></script>
    <script src="http://<?= $_SERVER["HTTP_HOST"] ?>/psctest/songcher_web_site/js/main.js" defer></script>
</head>

<body>
    <?php
    session_start();
    $user_id = $_SESSION['userid'];

    // var_dump($user_id);
    //반복이 되더라도 한버만 포함시킴
    include_once $_SERVER['DOCUMENT_ROOT'] . "/psctest/songcher_web_site/db/db_connect.php";
    $sql = "select * from members where id='$user_id'";
    //쿼리문을 실행 =>실행결과값을 레코드셋 저장
    $result = mysqli_query($con, $sql) or die('error : ' . mysqli_error($con));
    //레코드셋에서 첫번째 레코드를 연관배열저장($row)
    $row = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    //rlaeogus0911@nate.com => $email[0]="rlaeogus0911", $email[1]="nate.com"
    $email = explode("@", $row["email"]);
    $email = $email[0];

    mysqli_close($con);
    ?>
    <section>
        <form name="member_form" method="post" action="./member_modify.php">
            <h2>회원 정보 수정</h2>
            <label>사용자 ID</label>
            <input type="text" name="id" value="<?= $user_id ?>">

            <label>비밀번호</label>
            <input type="password" name="pass1" value="<?= $pass ?>">

            <label>비밀번호 확인</label>
            <input type="password" name="pass2" value="<?= $pass ?>">

            <label>성명</label>
            <input type="text" name="name" value="<?= $name ?>">

            <label>E-mail</label>
            <input type="text" name="email" value="<?= $email ?>">

            <input type="submit" value="수정" onclick="check_input()">
            <input type="button" value="취소" onclick="location.href='http://<?= $_SERVER['HTTP_HOST'] ?>/psctest/songcher_web_site/index.php'">
        </form>

    </section>
</body>

</html>