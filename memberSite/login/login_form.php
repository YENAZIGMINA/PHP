<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/member.css">
    <title>Document</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <?php include "../lib/top_login2.php"; ?>
        </div>

        <div id="menu">
            <?php include "../lib/top_menu2.php"; ?>
        </div>

        <div id="content">
            <div id="col1">
                <div id="left_menu">
                <?php include "../lib/left_menu.php"; ?>
                </div>
            </div>
            <div id="col2">
                <form name="member_form" method="post" action="login.php">
                <div id="title">
                    <img src="../img/title_login.gif" alt="login Message">
                </div>

                <div id="login_form">
                    <img id="login_msg" src="../img/login_msg.gif" alt="login Message">
                    <div id="login1">
                    <img src="../img/login_key.gif" alt="login key">
                </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>