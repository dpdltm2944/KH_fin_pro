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
        <h1>게시판</h1>
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
    <footer>
        © 2023 게시판. 모든 권리 보유.
    </footer>
</body>
</html>
