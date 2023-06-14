<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex01.php</title>
</head>
<body>
    <h1>php 출력하기</h1>
    <?php
    //변수만들기
    $year = 2023;

    echo "php를 배워보자 <br/>";
    echo 'php를 배워보자 <br/>';
    echo '오늘은 $year 년입니다 <br/>'; //''는 문자로 인식
    echo "오늘은 $year 년입니다 <br/>"; //""로 감싸야 변수는 변수로 들어옴
    ?>
</body>
</html>