<?php
if ($_POST['acc']=='admin' && $_POST['pw']=='1234') {
    header("location:member.php?login=1");
} else {
    // echo "帳號或密碼錯誤，請重新輸入";     
    header("location:login.php?m=帳號或密碼錯誤，請重新輸入");
}