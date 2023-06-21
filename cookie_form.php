<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- post : 주소창에 내 정보 남지않도록 -->
    <form method="post" action="cookie_print.php"> <!-- 연결창 연결 -->
        <input type="text" name="userid" placeholder="아이디" autofocus required><br/>
        <input type="password" name="pw" placeholder="비밀번호" required><br/>
        <input type="checkbox" name="chbox" value="yes">로그인상태유지<br/>
        <input type="submit" value="로그인">
    </form>
</body>
</html>