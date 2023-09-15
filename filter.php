<?php
     function web_filter($str){
        $str = $str.replaceAll("<","&lt;");
        $str = $str.replaceAll(">","&gt;");
        $str = $str.replaceAll("&","&amp;");
        $str = $str.replaceAll("\"","&quot;");
        return $str;
    }

    
?>