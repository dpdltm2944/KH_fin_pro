<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필</title>
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

    <section class="section profile">
        <h1>나의 프로필</h1>
        <div class="profile-info">
            <img src="user-profile.jpg" alt="프로필 이미지">
            
            
            
           

            <?php
            if ($_SESSION['id']) {
                $id = $_SESSION['id'];
        
                require "sql_connect.php";
        
                $sql_str = "SELECT name , age , sex , address FROM user WHERE id='$id'";
                $return = sql_con($sql_str);
            }

            while ($result = mysql_fetch_array($return)) 
            {
            ?>
            <h2>사용자 이름: <?php echo $result['name']; ?></h2>
                    <p>나이: <?php echo $result['age']; ?> </p>
                    <p>성별: <?php echo $result['sex']; ?></p>
                    <p>주소: <?php echo $result['address']; ?></p>
                <?php    
            }  

                ?>
            
        </div>
    </section>

    <!-- 다른 프로필 섹션 내용을 추가할 수 있습니다 -->

    <footer>
        <p>&copy; 2023 </p>
    </footer>
</body>
</html>
