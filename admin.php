<!--관리자 페이지-->
<!--합격 관리-->
<!--시험 목록-->
<!--응시자 목록-->
<!--합격 관리-->
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>관리자 페이지</title>
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
                if ($_SESSION['loginID'] == "") {
                    echo "<li><a href=\"/login.php\">로그인</a></li>";
                } else {
                    echo "<li><a href=\"/logout.php\">로그아웃</a></li>";
                }
                ?>
            </ul>

        </nav>
    </header>

    <form method="post" action="">