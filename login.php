<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>회원가입 및 로그인</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <header>
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

    <h2>로그인</h2>
    <div>
        <form method="post" action="/login_proc.php">
            <label for="id">ID:</label>
            <input type="text" name="id" required><br>

            <label for="password">비밀번호:</label>
            <input type="password" name="password" required><br>

            <input type="submit" name="login" value="로그인">
            
        </form>
        <button type="button" class="button" onclick="location.href='join.php'">회원가입</button>
    </div>
</body>
</html>
