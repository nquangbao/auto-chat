<?php


$fp = fopen('log.html', 'a');
fwrite($fp, stripslashes(htmlspecialchars($rep)) . $div);
fclose($fp);
<!--    --><?php
//    session_start();
//    if(isset($_SESSION['username'])){
//        if(file_exists('log.html') && filesize('log.html') > 0){
//            $read = fopen('log.html' , 'r');
//            $content = fread($read , filesize('log.html'));
//
//            echo $content;
//        }
//    }
//    else {
//        die('LOGIN ERROR');
//    }
//
//
//    ?>