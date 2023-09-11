<?php
    $keyword = $_GET['keyword'];
    require "sql_connect.php";
    $sql_str = "select * from notice where subject like '%$keyword%'";
    $return = sql_con($sql_str);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색 결과</title>
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

        
        검색어 : <?php echo $keyword. "\n"; ?> <br>

        <?php
        while($result = mysqli_fetch_array($return))
         {
         ?>
            <a href ="notice_view.php?no=<?php echo $result['no']; ?>"> 
            번호 : <?php echo $result['no']; ?>  
            제목 :<?php echo $result['subject']; ?> 
            작성자 : <?php echo $result['user_id']; ?> </a><br>
            <?php
         }
         ?>
         
    </body>
</html>
