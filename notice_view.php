<?php

    $no = $_GET['no'];
   
    require "sql_connect.php";
    $sql_str = "select * from notice where no=$no";
    $return = sql_con($sql_str);
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

        
            제목 : <?php echo $result['title']."\n"; ?> 
            내용 : <?php echo $result['content']."\n"; ?> 
            작성자 : <?php echo $result['user_id']."\n"; ?> 
    </body>
</html>
