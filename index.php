<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">메인</a></li>
                <li><a href="/evaluation.html">합격자 발표</a></li>
                <li><a href="/notice.html">공지사항</a></li>
                <li><a href="/qna.html">문의하기</a></li>
                <li><a href="/profile.html">마이페이지</a></li>
                <li><a href="/login.html">로그인</a></li>
            </ul>
        </nav>
    </header>

    <?php
          session_start();
          if($_SESSION['loginID'] != ""){
            // 로그인 시 프로필
            echo "<section class=\"section profile\">";
            echo "<h1>나의 프로필</h1>";
            echo "</section>";
          }  
    ?>
    

    <section class="section schedule">
        <h2>시험 일정</h2>
        <!-- 매칭 결과를 표시하는 내용을 추가하세요 -->
    </section>

    <footer>
        <p>&copy; 2023 Site Name</p>
    </footer>
</body>
</html>
