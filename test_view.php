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
                ?>
            </ul>
        </nav>
    </header>

    <?php
          
          if($_SESSION['loginID'] == ""){
            // 비로그인 시 사용 불가//
            echo "<script>";
			echo "alert('회원가입 후 이용해주세요');";
            echo "location.href='/';";
			echo "</script>";
          }  
    ?>
    

    <section class="section schedule">
        
        <?php
            require "sql_connect.php";
            $no = $_GET['test_no'];
            $sql_str = ("select * from test where test_no=$no");
            $return = sql_con($sql_str);
            $result = mysqli_fetch_array($return);
        ?>
        <h2><?php echo "$result['test_name']"; ?></h2>
           <p> 번호 : <?php echo $result['test_no']; ?><br>
            <?php echo $result['test_name']; ?>  <br>
            <?php echo $result['test_date']; ?> <br>
            <?php echo $result['test_place']; ?> 
            <?php echo $result['test_time']'분'; ?> 
            <?php echo $result['test_price']'원'; ?> 
            </p> 
            
        <!-- 매칭 결과를 표시하는 내용을 추가하세요 -->
    </section>

    <footer>
        <p>&copy; 2023 Site Name</p>
    </footer>
</body>
</html>
