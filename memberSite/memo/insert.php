<?php
session_start();

if(!isset($_SESSION['userid'])){
    echo "
    <script>
    alert ("로그인후 이용해 주세요");
    history.back();
    </script>
    ";
}else{
    $content=$_REQUEST["content"];
    include "../lib/dbconn.php";
}

?>