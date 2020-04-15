<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="text" id="text">
    <button name="send" id="send">send</button>
</form>
<div>
    <?php
    session_start();
    if(file_exists('log.html') && filesize('log.html') > 0){
        $read = fopen('log.html' , 'r');
        $content = fread($read , filesize('log.html'));

        echo $content;
    }

    ?>
</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>
</html>