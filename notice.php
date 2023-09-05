<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>게시판</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
<header>
        <nav>
            <ul>
                <li><a href="/">메인</a></li>
                <li><a href="/evaluation.html">합격자 발표</a></li>
                <li><a href="/notice.php">공지사항</a></li>
                <li><a href="/qna.php">문의하기</a></li>
                <li><a href="/profile.html">마이페이지</a></li>
                <li><a href="/login.html">로그인</a></li>
            </ul>
        </nav>
    </header>
    
        <!-- 게시물 작성 폼 (관리자만 접근 가능) -->
       <?php
            session_start();
            if ($_SESSION['type'] =='admin') {
            echo "<form method=\"post\" action=\"notice_insert.php\">";
                echo" 제목 : <input type=\"text\" name=\"subject\">";
                echo" 내용 : <textarea rows=\"5\" cols=\"50\" name=\"content\"></textarea>";
                echo"<input type=\"submit\" value=\"등록\"> <input type=\"reset\" value=\"취소\">";
            echo"</form>";
            }
            
            ?>

        <!-- 게시물 검색 폼 -->
        <form method="get" action="notice_search.php">
            키워드 : <input type="text" name="keyword">
            <input type="submit" value="검색"> <input type="reset" value="취소">
        </form>

        <!-- 게시물 목록 -->
        <?php
            require "sql_connect.php";

            $sql_str = ("select * from notice");
            while ($result = mysqli_fetch_array(sql_con($sql_str))) 
            {
                ?>
                <a href="notice_view.php?no=<?php echo $result['no'];?> ">번호 : <?php echo $result['no']; ?> 제목 : <?php echo $result['title']; ?> 작성자 : <?php echo $result['user_id']; ?> </a>   
                <?php    
            }     
            ?>
</body>
</html>

