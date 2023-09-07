<?php
require "sql_connect.php";
session_start();
$sql_str = "select * from qna where no=" . $_GET['no'];
$return = sql_con($sql_str);
$result = mysqli_fetch_array($return);
$title = $result['subject'];
$author = $result['user_id'];
$content = $result['content'];
$no = $result['no'];
?>
<!DOCTYPE html>
<html lang="ko">
<!--게시글 불러오기-->

<head>
    <meta charset="UTF-8">
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
                if ($_SESSION['loginID'] == "") {
                    echo "<li><a href=\"/login.php\">로그인</a></li>";
                } else {
                    echo "<li><a href=\"/logout.php\">로그아웃</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>
    <div class="section">
        <h2>문의 사항</h2>
        <form method="get" action="qna_update.php">
            <input type="hidden" name="no" value="<?php echo $no; ?>">
            <label for="title">제목:<?php echo $title?></label>
            <label for="user_id">작성자:<?php echo $author; ?></label>
            문의내용:<?php echo $content;"\n"?>
            <input type="button" value="삭제" onclick="location.href='qna_del.php?no=<?php echo $no; ?>'">
            <input type="button" value="목록" onclick="location.href='qna.php'">
        </form>
    </div>
    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>
</body>
