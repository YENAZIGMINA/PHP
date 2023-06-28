<?php
session_start();
//unset -> session 풀기
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['usernick']);
unset($_SESSION['useuserlevelrid']);

echo ("
        <script>
            location.href='../index.php';
        </script>
            
        ");

?>