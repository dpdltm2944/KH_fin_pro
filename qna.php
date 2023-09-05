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
                <li><a href="/evaluation.html">합격자 발표</a></li>
                <li><a href="/notice.php">공지사항</a></li>
                <li><a href="/qna.php">문의하기</a></li>
                <li><a href="/profile.html">마이페이지</a></li>
                <li><a href="/login.html">로그인</a></li>
            </ul>
        </nav>
    </header>
    <div class="section">
        <h2>게시글 작성</h2>
        <form>
            <label for="title">제목:</label>
            <input type="text" id="title" name="title" required>

            <label for="author">작성자:</label>
            <input type="text" id="author" name="author" required>

            <label for="content">문의내용:</label>
            <textarea id="content" name="content" rows="5" required></textarea>

            <input type="submit" value="등록">
            <input type="reset" value="취소">
        </form>
    </div>
    <div class="section">
        <h2>문의 사항 리스트</h2>
        <ul>
            <li>
                <strong>문의 제목 1:</strong> 작성자 1, 날짜 1
                <p>문의 내용 1</p>
            </li>
            <li>
                <strong>문의 제목 2:</strong> 작성자 2, 날짜 2
                <p>문의 내용 2</p>
            </li>
            <!-- 여기에 추가 문의 사항 리스트 항목 추가 -->
        </ul>
    </div>
    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>
</body>
</html>
