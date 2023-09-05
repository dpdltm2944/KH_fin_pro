<!DOCTYPE html>
<html>
<head>
    <title>게시판</title>
</head>

<body>
    <pre>
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
    </pre>
</body>
</html>

