<?php
session_start();
$div = "
<div class='row fix input_user ml-auto'>
    <div class='col-3 col-sm-3 col-md-4 col-xl-4 col-lg-4'>
        <img src='https://img.favpng.com/20/5/24/social-media-computer-icons-avatar-user-internet-png-favpng-DwdFSAXdR58nGmLe4y67jEej0.jpg' class='img-fluid avt'>
    </div>
    <div class='col-9 col-sm-9 col-md-8 col-xl-8 col-lg-8'>";
$close_div = "</div> </div>";
$text = $_POST['text'];
$date =  date("l jS \of F Y h:i:s A") ;
$fp = fopen('log.html', 'a');
fwrite($fp,  $div . stripslashes(htmlspecialchars($_SESSION['username']. $date." : " .$text)) . " " . $close_div);
fclose($fp);
