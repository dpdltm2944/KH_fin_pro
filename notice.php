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
    
        <!-- 게시물 작성 폼 (관리자만 접근 가능) -->
       <?php
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
            $return = sql_con($sql_str);
            while ($result = mysqli_fetch_array($return))
            {
                ?>
                <a href="notice_view.php?no=<?php echo $result['no'];?> ">번호 : <?php echo $result['no']; ?> 제목 : <?php echo $result['subject']; ?> 작성자 : <?php echo $result['user_id']; ?> </a>   
                <br>
                <?php        
            }     
            ?>
</body>
</html>

