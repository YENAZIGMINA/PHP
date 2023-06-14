<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex02.php</title>
    <style>
        table {
            width: 640px; 
            border-collapse:collapse;
            border:1px solid #222;
        }
        tr,td {
            border:1px solid #222;
        }
        table tr td:nth-child(1){text-align:right; width:30%;}
    </style>
</head>
<body>
    <h2>🎠--회원가입--🎈</h2>
    <form method="post" action="mem_print.php">
        <!-- method="" / get은 상단 주소창에 입력문구 뜸, post는 주소창에 안뜸  -->
        <!-- action은 어디로 값을 던져줄건지 -->
        <!-- <input type="text" name="title" value="회원가입 양식"> -->
        <table>
            <tr>
                <td>* 아이디 :</td>
                <td><input type="text" name="id" value="guest" autofocus required></td>
                <!-- autofocus : 입력창에 커서 자동으로 올려지게 함 -->
            </tr>
            <tr>
                <td>* 이름 :</td>
                <td><input type="text" name="name" value="name" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="확인"></td>
            </tr>
        </table>
    </form>
</body>
</html>