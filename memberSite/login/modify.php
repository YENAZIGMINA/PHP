<?php
session_start();

$id=$_SESSION['userid'];
$pass=$_REQUEST["pass"];
$name=$_REQUEST["name"];
$nick=$_REQUEST["nick"];
$hp1=$_REQUEST["hp1"];
$hp2=$_REQUEST["hp2"];
$hp3=$_REQUEST["hp3"];
$email1=$_REQUEST["email1"];
$email2=$_REQUEST["email2"];

$hp=$hp1 . "-" . $hp2 . "-" . $hp3;
$email=$email1."@".$email2;
$regist_day=date("Y-m-d (H:i)");

include "../lib/dbconn.php";

$sql="UPDATE member SET passwd='$pass', name='$name', nick='$nick', hp='$hp', email='$email', regist_day='$regist_day' WHERE id='$id'";

mysqli_query($connect,$sql);

mysqli_close($connect);

echo "
<script>
location.href='../index.php';
</script>
"

?>