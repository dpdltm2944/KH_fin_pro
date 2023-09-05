<?php
    require "sql_connect.php";
    $sql_str = "select * from qna order by no desc";
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
                <!--작성자는 session에서 가져오기-->
            <label for="user_id">작성자:</label> <lable type="text" value="<?php echo $user_id; ?>">
            
            <label for="content">문의내용:</label>
            <textarea id="content" name="content" rows="5" required></textarea>

            <input type="submit" value="등록">
            <input type="reset" value="취소">
        </form>
    </div>
    <div class="section">
        <h2>문의 사항 리스트</h2>
        <ul>
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li>
                            <strong>' . $row['subject'] . '</strong> 
                            <p>' . $row['user_id'] . '</p>
                            <p>' . $row['content'] . '</p>
                          </li>';
                }
            } else {
                echo '<li>등록된 게시글이 없습니다.</li>';
            }
            ?>
        </ul>
    </div>
    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>
</body>
</html>
