<?php
$userid=$_REQUEST["userid"];
$pw=$_REQUEST["pw"];
$chbox=$_REQUEST["chbox"];


//60*60 (1시간)         time()+60*60
//60*2 (2분)            time()+60*2
//60*60*24 (1일)        time()+60*60*24
//60*60*24*30 (30일)    time()+60*60*24*30

//setcookie("쿠키변수", 값, 시간)
//setcookie("쿠키변수", 값, time()*60*60) //1970년 1월 1일 0시부터 시작한 "초"단위
if($userid === "leeyena4724"){
    //isset : ~이 있냐?
    if(isset($_REQUEST["chbox"])){
        setcookie("id", $userid, time()+60*5);
    }
    if($pw==="951753"){
        print "✨관리자 로그인확인✨";
    }else{
        ?>
        <script>
            alert ("❌ 관리자 PW가 틀렸습니다.")
            history.back();
        </script>
        <?php
    }}
    else{
        ?>
        <script>
            alert ("❌ 관리자 ID가 틀렸습니다.")
            history.back(); //다시 form페이지로 넘어간다
        </script>
        <?php
        
    }
    ?>



