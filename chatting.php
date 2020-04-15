
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        div#box {
            width: 30%;
            margin: auto;
            border: 1px solid;
            min-height: 25rem;
            padding: 10px;
            -webkit-box-shadow: -4px 11px 17px -5px rgba(204,190,204,1);
            -moz-box-shadow: -4px 11px 17px -5px rgba(204,190,204,1);
            box-shadow: -4px 11px 17px -5px rgba(204,190,204,1);
            overflow-y: scroll;
        }
        div.avt {
            border: 1px solid;
            border-radius: 100%;
        }
        div.fix {
            margin: 1rem 0;
            background: aqua;
            border-bottom: 1px solid #ccc;
            padding: 10px 0px;
            color : black;
            font-weight: bold;
            border-radius: 15px;
        }
        div.input_user {
            width: 100%;
            margin-left: auto;
            text-align: right;
            background: red;
        }
        img {
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="box">
            <div class="row fix">
                <div class="col-3 col-sm-3 col-md-4 col-xl-4 col-lg-4 ">
                    <img src="https://img.favpng.com/20/5/24/social-media-computer-icons-avatar-user-internet-png-favpng-DwdFSAXdR58nGmLe4y67jEej0.jpg" alt="" class="img-fluid avt">
                </div>
                <div class="col-9 col-sm-9 col-md-8 col-xl-8 col-lg-8 ">
                    text
                </div>
            </div>
            <div class="row fix input_user ml-auto">
                <div class="col-3 col-sm-3 col-md-4 col-xl-4 col-lg-4">
                    <img src="https://img.favpng.com/20/5/24/social-media-computer-icons-avatar-user-internet-png-favpng-DwdFSAXdR58nGmLe4y67jEej0.jpg" alt="" class="img-fluid avt">
                </div>
                <div class="col-9 col-sm-9 col-md-8 col-xl-8 col-lg-8 ">
                    text
                </div>
            </div>
        </div>
        <form action="">
            <div class="form-group text-center">
                <input type="text" class="" id="text" name="text" placeholder="write mess">
                <button class="btn-primary" id="send" type="button">send</button>
            </div>


        </form>

    </div>

<div>

</div>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<!--<script src="js.js"></script>-->
</body>
</html>