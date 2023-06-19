<!-- 값을 받는 역할 -->
<?php
$id = $_REQUEST["id"]; //["input의 name"]
//REQUEST : mthod - GET, POST 모두 받을 수 있음
$name = $_REQUEST["name"];
$passwd=$_REQUEST["passwd"];
$passwd_confirm=$_REQUEST["passwd_confirm"];
$birth_year=$_REQUEST['birth_year'];
$birth_month=$_REQUEST['birth_month'];
$birth_day=$_REQUEST['birth_day'];

echo "$id<br>";
echo "$name<br>";
echo "$passwd<br>";
echo "$passwd_confirm<br>";
echo "$birth_year<br>";
echo "$birth_month<br>";
echo "$birth_day<br>;"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 640px; 
            border-collapse:collapse;
            border:1px solid #222;
        }
        tr,td {border:1px solid #222;}
        table tr td:nth-child(1){text-align:right; width:30%;}
    </style>
</head>
<body>
    <h2>👻회원가입-결과🦄💙</h2>
    <table>
        <tr>
            <td>* 아이디 :</td>
            <!-- <td><?php print $id;?></td> -> php print를 아래(=)처럼 줄일 수 있음 -->
            <td><?= $id; ?></td>
        </tr>
        <tr>
            <td>* 이름 :</td>
            <td><?= $name; ?></td>
        </tr>
        <tr>
            <td>* 비밀번호 :</td>
            <td><?= $passwd; ?></td>
        </tr>
        <tr>
            <td>* 비밀번호 확인 :</td>
            <td><?= $passwd_confirm; ?></td>
        </tr>
        <tr>
            <td>* 생년월일 :</td>
            <td><?=$birth_year?>년 <?=$birth_month?>월 <?=$birth_day?>일</td>
        </tr>
    </table>
</body>
</html>