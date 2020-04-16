
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="box">
            <?php
            session_start();
            if(isset($_SESSION['username'])){
                $file = "log.html";
                if(file_exists($file) && filesize($file) > 0){
                    $read = fopen($file , 'r');
                    $content = fread($read , filesize($file));
                    echo $content;
                }
            }
            else {
                die('LOGIN ERROR');
            }
            ?>
        </div>
        <div class="form">
            <form action="">
                <div class="form-group text-center">
                    <input type="text" class="" id="text" name="text" placeholder="write mess">
                    <button class="btn-primary" id="send">send</button>
                </div>


            </form>
        </div>
        <p class="welcome">Welcome, <b><?php echo $_SESSION['username']; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
    </div>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>
</html>