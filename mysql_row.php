<?php
//$connect=new mysqli(서버이름,아이디,비밀번호,데이터베이스)
$connect=new mysqli(localhost,'root','','green')

$sql="SELECT * FROM membership";
$result=$connect->query($sql); //sql과 연결하는 방법



$number=1;

?>