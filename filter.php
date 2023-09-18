<?php
     function web_filter($str){
        $str = $str.str_replace("<","&lt;",$str);
        $str = $str.str_replace(">","&gt;",$str);
        $str = $str.str_replace("&","&amp;",$str);
        $str = $str.str_replace("\"","&quot;",$str);
        return $str;
    }

    
?>