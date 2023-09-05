<?php

    $no = $_GET['no'];
   
    require "sql_connect.php"
    $sql = "select * from notice where no=$no";
    $return = sql_con($sql);
    $result = mysqli_fetch_array($return);


?>

<!DOCTYPE html>
<html>
    <head>  
        <title><?php echo $result['subject']; ?> </title>
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

        
            제목 : <?php echo $result['title']."\n"; ?> 
            내용 : <?php echo $result['content']."\n"; ?> 
            작성자 : <?php echo $result['user_id']."\n"; ?> 
    </body>
</html>
