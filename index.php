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
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" id="tabreg"><i
                                    class="fas fa-user-plus mr-1 "></i>
                            Đăng ký</a>
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
                    <div class="tab-pane fade" id="panel8" role="tabpanel" id="formreg">
                        <div class="modal-body">
                            <form action="sigup.php" name="regsite" id="regsite" method="POST">
                                <div class="md-form form-sm ">
                                    <div class="form-row">
                                        <div class="form-group col-md-6 col-xl-6">
                                            <label data-error="wrong" data-success="right" for="rguser"> Tên tài
                                                khoản</label>
                                            <input type="text" id="rguser"
                                                   class="form-control form-control-sm validate" name="rguser"
                                                   placeholder="Admin">
                                        </div>
                                        <div class="form-group col-md-6 col-xl-6">
                                            <label data-error="wrong" data-success="right"
                                                   for="rgPhone">Email</label>
                                            <input type="email" id="rgPhone"
                                                   class="form-control form-control-sm validate" name="rgPhone"
                                                   placeholder="abc@domain.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="md-form form-sm">
                                    <label data-error="wrong" data-success="right" for="rgPassword">Mật Khẩu</label>

                                    <input type="password" id="rgPassword"
                                           class="form-control form-control-sm validate" name="rgPassword">
                                </div>
                                <div class="md-form form-sm mb-2">
                                    <label data-error="wrong" data-success="right" for="rgRpassword">Nhập lại mật
                                        khẩu</label>
                                    <input type="rgRpassword" id="modalLRInput14"
                                           class="form-control form-control-sm validate" name="rgRpassword">
                                </div>
                        </div>
                        <div class="text-center form-sm ">
                            <button class="btn btn-info" type="submit">Đăng Ký <i
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
        $_SESSION['username'] = $username;
        $sql = "SELECT * FROM member WHERE username='$username' and password='$password'";
        $query = mysqli_query($connect, $sql);
        $num_row = mysqli_num_rows($query);
        if ($num_row == 0) {
            $rep = "USERNAME or PASSWORD không tồn tại";
        } else {
            if(isset($_SESSION['username'])){
                echo "<meta http-equiv='refresh' content='0;url=chatting.php'>";
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