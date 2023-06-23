<?php
//$connect=new mysqli(서버이름,아이디,비밀번호,데이터베이스)
$connect=new mysqli('localhost','root','green2');

$sql="SELECT * FROM membership";
$result=$connect->query($sql); //sql과 연결하는 방법


$number=1;
?>


<h2>데이터 읽어오기</h2>

<table>
    <tr>
        <td>일련번호</td>
        <td>아이디</td>
        <td>이름</td>
        <td>우편번호</td>
        <td>주소</td>
        <td>전화번호</td>
        <td>나이</td>
    </tr>
    <?php
    while($row=$result->fetch_assoc()){
        print "
        <tr>
            <td>$number</td>
            <td>{$row["id"]}</td>
            <td>{$row["name"]}</td>
            <td>{$row["post_num"]}</td>
            <td>{$row["address"]}</td>
            <td>{$row["tel"]}</td>
            <td>{$row["age"]}</td>
        </tr>
        ";
        $number++;
     }
     $connect->close(); //통신닫기
    ?>
</table>



<!-- 
    
$row=$result->fetch_assoc()

$result->fetch_assoc()는 데이터베이스의 결과를 행을 기준으로 배열형태로 가져오는 역할

while($row=$result->fetch_assoc())는 $result변수에 저장된 데이터베이스의 결과값에서 행을 차례로 가져와서 $row변수에 할당

-->