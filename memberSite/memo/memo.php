<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/memo.css">
</head>
<body>
    <div id="wrap">
        <div id="header">
            <?php include "../lib/top_login2.php"; ?>
        </div> <!-- /header -->
        <div id="menu">
            <?php include "../lib/top_menu2.php"; ?>
        </div> <!-- /menu -->

        <div id="content">
            <div id="col1">
                <div id="left_menu">
                    <?php include "../lib/left_menu.php" ?>
                </div>
            </div> <!-- /col1 -->
            <div id="col2">
                <div id="title">
                    <img src="../img/title_free.gif" alt="memo">
                </div> <!-- /title -->
                <?php
                if(isset($_SESSION['userid'])){
                ?>

                    <div id="memo_row1">
                        <form action="insert.php" name="memo_form" method="post">
                            <div id="memo_writer">
                                <span>🎀 <?=$_SESSION['usernick']?> 🎀</span>
                            </div>
                            <div id="memo1">
                                <textarea name="content" cols="85" rows="6"></textarea>
                            </div>
                            <div id="memo2">
                                <input type="image" src="../img/memo_button.gif"></input>
                            </div>
                        </form>
                    </div>

                <?php
                }

                ?>
                

            </div> <!-- /col2 -->
        </div> <!-- /content -->
    </div> <!-- /wrap -->
</body>
</html>