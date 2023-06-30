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
    <link rel="stylesheet" href="../css/member.css">
    <script>
        //id 중복확인
        function check_id(){
            window.open("../member/check_id.php?id="+document.member_form.id.value, "IDCheck", "top=200,left=200,width=200,height=100");
        }
        //닉네임 중복확인
        function check_nick(){
            window.open("../member/check_nick.php?nick="+document.member_form.nick.value, "NICKCheck", "top=200,left=200,width=300,height=150");
        }
        //저장하기
        function check_input(){
            if(!document.member_form.pass.value){
                alert("💢 비밀번호를 입력하세요")
                document.member_form.pass.focus();
                return;
            }
            if(!document.member_form.pass_confirm.value){
                alert("💥 비밀번호를 확인하세요")
                document.member_form.pass_confirm.focus();
                return;
            }
            if(!document.member_form.name.value){
                alert("👩🏻 이름을 입력하세요")
                document.member_form.name.focus();
                return;
            }
            if(!document.member_form.nick.value){
                alert("🧑🏻 닉네임을 입력하세요")
                document.member_form.nick.focus();
                return;
            }
            if(!document.member_form.hp2.value||!document.member_form.hp3.value){
                alert("📞휴대폰번호를 입력하세요")
                document.member_form.hp2.focus();
                return;
            }
            if(document.member_form.pass.value!==document.member_form.pass_confirm.value){
                alert("❌비밀번호가 일치하지 않습니다. 다시 입력해주세요.")
                document.member_form.pass.focus();
                return;
            }
            document.member_form.submit();
        }
        //취소하기
        function reset_form(){
            document.member_form.id.value="";
            document.member_form.pass.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.name.value="";
            document.member_form.nick.value="";
            document.member_form.hp1.value="";
            document.member_form.hp2.value="";
            document.member_form.hp3.value="";
            document.member_form.email1.value="";
            document.member_form.email2.value="";

            document.member_form.id.focus();
        }
    </script>
</head>
<?php
if(isset($_SESSION['userid'])){
    $id=$_SESSION['userid'];

    include "../lib/dbconn.php";

    $sql="SELECT * FROM member WHERE id='$id'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result);

    $hp=explode('-',$row['hp']);
    //'-'구분자로 사용되고 $row['hp']를 분할하여 문자열로 추출
    $hp1=$hp[0];
    $hp2=$hp[1];
    $hp3=$hp[2];

    $email=explode('@',$row['email']);
    $email1=$email[0];
    $email2=$email[1];


    mysqli_close($connect);
}else{
    echo "로그인을 다시 시도해 주세요.";
}
?>

<body>
<div id="wrap">
        <div id="header">
            <?php include "../lib/top_login2.php" ?>
        </div>

        <div id="menu">
            <?php include "../lib/top_menu2.php" ?>
        </div>
        <div id="content">
            <div id="col1">
                <div id="left_menu">
                    <?php include "../lib/left_menu.php" ?>
                </div>
            </div> <!-- /col1 -->
            <div id="col2">
                <form name="member_form" method="post" action="modify.php">
                    <div id="title">
                        <img src="../img/title_join.gif">
                    </div>
                    <div id="form_join" class="clearfix">
                        <div id="join1">
                            <ul>
                                <li>* 아이디</li>
                                <li>* 비밀번호</li>
                                <li>* 비밀번호 확인</li>
                                <li>* 이름</li>
                                <li>* 닉네임</li>
                                <li>* 휴대폰</li>
                                <li>&nbsp;&nbsp;이메일</li>
                            </ul>
                        </div> <!-- /join1 -->
                        <div id="join2">
                            <ul>
                                <li>
                                    <?=$row['id']?>
                                </li>
                                <li>
                                    <input type="password" name="pass" value="<?=$row['passwd']?>">
                                </li>
                                <li>
                                    <input type="password" name="pass_confirm" value="<?=$row['passwd']?>">
                                </li>
                                <li>
                                    <input type="text" name="name" value="<?=$row['name']?>">
                                </li>
                                <li>
                                    <div id="nick1">
                                        <input type="text" name="nick" value="<?=$row['nick']?>">
                                    </div>
                                    <div id="nick2">
                                        <a href="#">
                                            <img src="../img/check_id.gif" onclick="check_nick()">
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <input type="text" name="hp1" class="hp" value="<?=$hp1?>">
                                    - <input type="text" name="hp2" class="hp" value="<?=$hp2?>">
                                    - <input type="text" name="hp3" class="hp" value="<?=$hp3?>">
                                </li>
                                <li>
                                    <input type="text" id="email1" name="email1" value="<?=$email1?>"> @ 
                                    <input type="text" id="email2" name="email2" value="<?=$email2?>">
                                </li>
                            </ul>
                        </div> <!-- /join2 -->
                        <div id="must" class="clear">*는 필수 입력항목 입니다.</div>
                    </div>
                    <div id="button">
                        <a href="#"><img src="../img/button_save.gif" onclick="check_input()"></a>&nbsp;&nbsp;
                        <a href="#"><img src="../img/button_reset.gif" onclick="reset_form()"></a>
                    </div>
                </form>
            </div> <!-- /col2 -->
        </div>
    </div>
</body>
</html>