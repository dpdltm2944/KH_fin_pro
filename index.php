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
                if($_SESSION['loginID'] == "admin"){
                    echo "<li><a href=\"/admin.php\">관리자 페이지</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <?php
          
          if($_SESSION['loginID'] != ""){
            // 로그인 시 나의 접수현황 //
            require "sql_connect.php";
            $user_no = $_SESSION['user_no'];
            /// join 하여 데이터 출력 해야됨///
            $sql_str = ("select * from test_order join test on test_order.test_no = test.test_no where test_order.user_no = $user_no");
            $return = sql_con($sql_str);
            echo "<section class=\"section profile\">";
            echo "<h1>나의 접수현황</h1>";
            
            while ($result = mysqli_fetch_array($return))
            {
                echo "<section>";
                echo $result['test_name']; echo " ";
                echo $result['test_date']; echo " ";
                echo $result['test_time']; echo "분 ";
                echo $result['test_price']; echo "원 ";
                echo $result['test_place']; echo " ";
                echo "수험번호: ";echo $result['order_id'];
                echo "</section>";
                echo "<br>";
            }
            echo "</section>";
          }  
    ?>
    

    <section class="section schedule">
        <h2>시험 일정</h2>
        <?php
            $sql_str = ("select * from test where date(now()) <= date(test_date) order by test_date");
            $return = sql_con($sql_str);
            while ($result = mysqli_fetch_array($return))
            {
                ?>
                <a href="/test_view.php?test_no=<?php echo $result['test_no'];?>">번호 : <?php echo $result['test_no']; ?>  <?php echo $result['test_name']; ?>  <?php echo $result['test_date']; ?> <?php echo $result['test_place']; ?></a> <br>
                <?php    
            }     
            ?>
        <!-- 매칭 결과를 표시하는 내용을 추가하세요 -->
    </section>

    <footer>
        <p>&copy; 2023 Site Name</p>
    </footer>
</body>
</html>
