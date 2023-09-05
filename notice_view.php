<?php

    $no = $_GET['no'];
   
    require "sql_connect.php"
    $sql = "select * from notice where no=$no";
    $return = sql_con($sql);
    $result = mysql_fetch_array($return);


?>

<!DOCTYPE html>
<html>
    <head>  
        <title><?php echo $result['subject']; ?> </title>
    </head>

    <body>
        <pre>
            제목 : <?php echo $result['title']."\n"; ?> 
            내용 : <?php echo $result['content']."\n"; ?> 
            작성자 : <?php echo $result['user_id']."\n"; ?> 
    </body>
</html>
