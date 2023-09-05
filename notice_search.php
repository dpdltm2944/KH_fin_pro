<?php
    $keyword = $_GET['keyword'];

    require "sql_connect.php"
    $sql = "select * from notice where subject like '%$keyword%'";
    $return = sql_con($sql);
    $result = mysqli_fetch_array($return);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>검색 결과</title>
    </head>

    <body>

        <pre>
        검색어 : <?php echo $keyword. "\n"; ?> <br>

        <?php
        while($result = mysqli_fetch_array($return))
         {
         ?>
              <a href ="notice_view.php?no=<?php echo $result['no']; ?>"> 
              번호 : <?php echo $result['no']; ?>  
               제목 :<?php echo $result['subject']; ?> 
              작성자 : <?php echo $result['user_id']; ?> </a><br>
              <?php
         }
         ?>
         </pre>
    </body>
</html>
