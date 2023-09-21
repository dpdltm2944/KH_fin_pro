<?php
    require "sql_connect.php";
    $sql_str = "call list_qna();";
    $result = sql_con($sql_str);
?>

<!DOCTYPE html>
<html lang="ko">
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
                $user_id = $_SESSION['loginID'];
                ?>
            </ul>
        </nav>
    </header>
    <div class="section">
        <h2>게시글 작성</h2>
        <form method="post" action="qna_add.php">
            <label for="title">제목:</label>
            <input type="text" id="title" name="title" required>
            <label for="user_id">작성자:<?php echo $user_id; ?></label>            
            <label for="content">문의내용:</label>
            <textarea id="content" name="content" rows="5" required></textarea>

           <!--공백 줄 추가-->
              <br>
           <input type="submit" value="등록">
           <input type="reset" value="취소">
        </form>
    </div>    
</body>
<body>
    <h2>목록</h2>
    <div class="section">
        
        <ul>
            <?php
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<li><a href=\"qna_view.php?no={$row['no']}\">{$row['subject']}</a></li>";
                }
            }else{
                echo "게시글이 없습니다.";
            }
            ?>
        </ul>
    </div>

    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>
</body>
</html>
