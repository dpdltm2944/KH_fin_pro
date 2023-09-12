<?php
    require "sql_connect.php";
    session_start();
    $user_id = $_SESSION['loginID'];
    //삭제할 글의 user_id를 받아옴
    $sql_str = "select user_id from qna where no=" . $_GET['no'];
    $return = sql_con($sql_str);
    $result = mysqli_fetch_array($return);
    $author = $result['user_id'];
    $qna_no = $_GET['no'];
    //로그인한 사용자와 글 작성자가 같은지 확인
    if($user_id != $author){
        echo "<script>
        alert('권한이 없습니다.');
        </script>";
        echo "<script>location.href='qna.php'</script>";
    }else{
        $sql_Str = "call del_qna($qna_no);";
        $return = sql_con($sql_str);
        if($return){
            echo "<script>
            alert('글 삭제 성공');
            </script>";
            echo "<script>location.href='qna.php'</script>";
        }
        else {
            echo "<script>
            alert('글 삭제 실패');
            </script>";
            echo "<script>location.href='qna.php'</script>";
        }    
    
    }
    
?>
