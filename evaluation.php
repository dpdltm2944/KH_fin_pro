<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>시험 결과 조회</title>
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
    <h1>시험 결과 조회</h1>

    <form method="post" action="evaluation_proc.php">
        수험번호: <input type="text" name="order_id"><br>
        이름: <input type="text" name="user_name"><br>
        <input type="submit" value="조회">
    </form>
</body>
</html>

