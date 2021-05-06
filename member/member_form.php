<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="css/member_form.css">
</head>

<body>
    <form name="member_form" method="post" action="./member_insert.php">
        <h2>회원가입</h2>
        <label>닉네임</label>
        <input type="text" placeholder="닉네임 입력" name="user_nick">

        <label>이름</label>
        <input type="text" placeholder="이름 입력" name="user_name">

        <label>아이디</label>
        <input type="text" placeholder="아이디 입력" name="user_id">

        <label>비밀번호</label>
        <input type="password" placeholder="비밀번호 입력" name="user_pass1">

        <label>비밀번호 확인</label>
        <input type="password" placeholder="비밀번호 확인" name="user_pass2">

        <label>E-Mail</label>
        <input type="text" placeholder="E-Mail 입력" name="user_email">

        <label>핸드폰 번호</label>
        <input type="text" placeholder="핸드폰 번호 입력" name="user_phone">

        <input type="submit" value="가입하기"></input>
        <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/login/login_form.php" class="save">이미 회원이신가요? (로그인페이지)</a>
    </form>

</body>

</html>