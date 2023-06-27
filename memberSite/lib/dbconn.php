<?php
$connect=mysqli_connect("localhost","root","") or die('SQL server에 연결할 수 없습니다.');
//mysqli_select_db($connect,"데이터베이스 이름")
mysqli_select_db($connect,"phptest");
?>