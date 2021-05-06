<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="css/login.css?after">
</head>

<body>
    <form action="login.php" method="post">
        <h2>로그인</h2>
        <label>아이디</label>
        <input type="text" placeholder="아이디 입력" name="id">

        <label>비밀번호</label>
        <input type="password" placeholder="비밀번호 입력" name="pass">

        <input type="submit" value="로그인"></input>
        <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/psctest/songcher_web_site/member/member_form.php" class="save">회원이 아니신가요? (회원가입 페이지)</a>
        </from>

</body>

</html>