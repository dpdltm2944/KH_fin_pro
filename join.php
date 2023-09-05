<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원 가입</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
            <ul>
                <li><a href="/">메인</a></li>
                <li><a href="/evaluation.php">합격자 발표</a></li>
                <li><a href="/notice.php">공지사항</a></li>
                <li><a href="/qna.php">문의하기</a></li>
                <li><a href="/profile.php">마이페이지</a></li>
                <?php 
                session_start();
                if($_SESSION['loginID']== ""){
                echo "<li><a href=\"/login.php\">로그인</a></li>";
                }else{
                    echo "<li><a href=\"/logout.php\">로그아웃</a></li>";
                }
                ?>
            </ul>
            </nav>
        </header>

        <form method="post" action="join_proc.php">
            *아이디 : <input type="text" name="id" id="id" maxlength="15">(최대 15자리까지 입력가능)
            *비밀번호 : <input type="password" name="pass" id="pass">
            *이름 : <input type="text" name="name" id="name">
            *휴대폰 : <input type="text" name="phone" id="phone">
            *이메일 : <input type="text" name="email" id="email">
            *나이 : <input type="text" name="age" id="age">
            *성별 : <input type="text" name="sex" id="sex">
            *주민번호 : <input type="text" name="register_number" id="register_number">
            주소 : <input type="text" name="address" id="address">
            학력 : <input type="text" name="academic" id="academic">
            * 표시 항목은 필수 입력 항목입니다.
            <input type="submit" value="가입"> <input type="reset" value="취소">
        </form>
    </body>
</html>
