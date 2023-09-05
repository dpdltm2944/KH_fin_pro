<?php
    require "sql_connect.php";
    session_start();
    

    
    $sql_str = "delete from qna where no=" . $_GET['no'];
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

?>
