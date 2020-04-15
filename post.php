<?php
$hello = array('hello', 'chào');
$old = array('tuổi', 'old');
$nghe = array('nghề', 'nghiep');
$div = "<br>";
$rep = "";
$text = $_POST['text'];
$ar = explode(" ", $text);
for ($i = 0; $i < 100; $i++) {
    $hello1 = in_array($hello[$i], $ar);
    $old1 = in_array($old[$i], $ar);
    $nghe1 = in_array($nghe[$i], $ar);
    if ($hello1) {
        $rep = "xin chào tôi tên bảo";
        break;
    }
    if ($old1) {
        $rep = "tôi 20 tuổi";
        break;
    }
    if ($nghe1) {
        $rep = "tôi là lập trình viên php";
        break;
    } else {
        $rep = "câu hỏi này chưa được lập trình";

    }

}

$fp = fopen('log.html', 'a');
fwrite($fp, stripslashes(htmlspecialchars($rep)) . $div);
fclose($fp);


