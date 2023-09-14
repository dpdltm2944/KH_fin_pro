<?php
     function web_filter($str){
        return htmlentities($this->mysql_fix_string($str), ENT_QUOTES, "UTF-8");
    }

    
?>