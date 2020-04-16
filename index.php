<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>
<div class="modal fade" id="loginAndRegsite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-c-tabs">
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                    class="fas fa-user mr-1"></i>
                            Đăng nhập</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <div class="modal-body mb-1">
                            <form action="" name="login" id="login" method="POST">
                                <div class="md-form form-sm mb-5">
                                    <label data-error="wrong" data-success="right" for="user"> Tên tài khoản</label>
                                    <input type="text" id="user" class="form-control form-control-sm " name="username"
                                           placeholder="Admin">
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <label data-error="wrong" data-success="right" for="password">Your
                                        password</label>

                                    <input type="password" id="password"
                                           class="form-control form-control-sm validate" name="password"
                                           placeholder="******">

                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info" type="submit" name="submit">Đăng nhập <i
                                                class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                <div class="modal-footer">
                    <button type="button" id="submit" class="btn btn-danger waves-effect ml-auto"
                            data-dismiss="modal">Đóng
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="text-center">
    <a href="" id="btnmodal" class="btn btn-primary btn-rounded my-3" data-toggle="modal"
       data-target="#loginAndRegsite">Đăng nhập/Đăng ký</a>
</div>
<div>
    <?php
    require_once('connect.php');
    $rep = "";
    if (!$connect) {
        $rep = "KHÔNG THỂ KẾT NỐI DATABASE : ";
        die($rep . mysql_connect_error);
    }
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = stripslashes(htmlspecialchars($_POST['username']));
        $sql = "SELECT * FROM member WHERE username='$username' and password='$password'";
        $sql2 = "SELECT * FROM member WHERE username='$username'";
        $insert = "INSERT INTO member (username , password) VALUES('$username' , '$password')";

        $query = mysqli_query($connect, $sql);
        $query2 = mysqli_query($connect , $sql2);
        $num_row = mysqli_num_rows($query);
        if ($num_row == 0) {
            $add = mysqli_query($connect , $insert);
            if($add){
                $rep = "SIGUP SUCCESS . PLEASE LOGIN";
            }
            else {
                $rep = "USERNAME HAS HAVE";
            }

        } else {
            if(isset($_SESSION['username'])){
                $rep = "WANT 5S LOGIN";
                echo "<meta http-equiv='refresh' content='5;url=chatting.php'>";
                }
            }
        }
        echo "<div class='alert alert-warning text-center' role='alert'> {$rep}</div>";

    ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>