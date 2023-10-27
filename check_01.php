<?php
$check="N";
// $acc =  $_POST['acc'];
// $pw =  $_POST['pw'];
// echo "帳號:".$acc."<br>";
// echo "密碼:".$pw."<br>";

if (!empty($_POST)) {
    $acc = (!empty($_POST['acc'])) ? $_POST['acc'] : "沒有帳號資料";
    $pw = (!empty($_POST['pw'])) ? $_POST['pw'] : "沒有密碼資料";
    
    if ($acc="admin" && $pw="1234") {
        $check="Y";
    } 
    // echo "登入成功".$check;    
    header("location:login.php?a=$acc&p=$pw&c=$check");
} else {
    // echo "帳號或密碼錯誤，請重新輸入";     
    header("location:login.php?m=請輸入必要資訊");
}