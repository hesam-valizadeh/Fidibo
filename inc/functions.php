<?php
require_once 'config.php';
$devicenameErr = $fnameErr = $numberErr = $emailErr = $questionErr = $cellphoneErr = $passErr = $emailErr2 =$frnameErr=$lanameErr= '';
function isValidate()
{
    global $devicenameErr, $fnameErr, $numberErr, $emailErr, $questionErr, $passErr, $cellphoneErr,$emailErr2,$frnameErr,$lanameErr;
    $hasError = false;

    if (empty($_POST['idevicename'])) {
        $devicenameErr = 'وارد کردن نام دستگاه الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['idevicename']) < 6 or strlen($_POST['idevicename']) > 30) {
        $devicenameErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (preg_match("[a-zA-Z]", $_POST['idevicename'])) {
        $devicenameErr .= 'لطفا انگلیسی تایپ کنید نوع دستگاه رو';
        $hasError = true;
    }


    if (empty($_POST['iquest'])) {
        $questionErr = 'وارد کردن شرح مشکل الزامی است' . '<br>';
        $hasError = true;

    } elseif (strlen($_POST['iquest']) < 6) {
        $questionErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (!preg_match("/^[\s\x{0600}-\x{06FF}]*$/u", $_POST['iquest'])) {
        $questionErr .= 'لطفا فارسی تایپ کنید';
        $hasError = true;
    }

    if (empty($_POST['iname'])) {
        $fnameErr = 'وارد کردن نام الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['iname']) < 6 or strlen($_POST['iname']) > 100) {
        $fnameErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (!preg_match("/^[\s\x{0600}-\x{06FF}]*$/u", $_POST['iname'])) {
        $fnameErr .= 'لطفا فارسی تایپ کنید';
        $hasError = true;
    }

    if (empty($_POST['inumber'])) {
        $numberErr = 'وارد کردن شماره الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['inumber']) < 8) {
        $numberErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (!preg_match("[0-9]", $_POST['inmuber'])) {
        $numberErr .= 'لطفا عدد تایپ کنید';
        $hasError = true;
    }
    if (empty($_POST['iemail'])) {
        $emailErr = 'وارد کردن ایمیل الزامی است';
        $hasError = true;
    } elseif (!filter_var($_POST['iemail'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = 'لطفا یک ایمیل معتبر وارد کنید';
        $hasError = true;

    }
    if (empty($_POST['iemail2'])) {
        $emailErr2 = 'وارد کردن ایمیل الزامی است';
        $hasError = true;
    } elseif (!filter_var($_POST['iemail2'], FILTER_VALIDATE_EMAIL)) {
        $emailErr2 = 'لطفا یک ایمیل معتبر وارد کنید';
        $hasError = true;

    }
    if (empty($_POST['ipass'])) {
        $passErr = 'وارد کردن رمز عبور الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['ipass']) < 6) {
        $passErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (empty($_POST['frname'])) {
        $frnameErr = 'وارد کردن نام الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['frname']) < 6 or strlen($_POST['frname']) > 100) {
        $frnameErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (!preg_match("/^[\s\x{0600}-\x{06FF}]*$/u", $_POST['frname'])) {
        $frnameErr .= 'لطفا فارسی تایپ کنید';
        $hasError = true;
    }
    if (empty($_POST['laname'])) {
        $lanameErr = 'وارد کردن نام الزامی است' . '<br>';
        $hasError = true;
    } elseif (strlen($_POST['laname']) < 6 or strlen($_POST['laname']) > 100) {
        $lanameErr = 'تعداد حروف مجاز نیست' . '<br>';
        $hasError = true;
    }
    if (!preg_match("/^[\s\x{0600}-\x{06FF}]*$/u", $_POST['laname'])) {
        $lanameErr .= 'لطفا فارسی تایپ کنید';
        $hasError = true;
    }


    if ($hasError) {
        return false;
    } else {
        return true;
    }
}

function test_input($i)
{
    $i = trim($i);
    $i = stripcslashes($i);
    $i = htmlspecialchars($i);
    return $i;
}

function addToDatabase()
{

    global $conn;
    $devicename = test_input($_POST['idevicename']);
    $question = test_input($_POST['iquest']);
    $name = test_input($_POST['iname']);
    $frname = test_input($_POST['frname']);
    $laname = test_input($_POST['laname']);
    $email = test_input($_POST['iemail']);
    $email2 = test_input($_POST['iemail2']);
    $number = test_input($_POST['inumber']);
    $cellphone = test_input($_POST['icellphone']);
    $pass = test_input($_POST['ipass']);
    $sql = "INSERT  INTO device (device_name,last_name,cellphone_number,email,text,cellphone_number,email_login,password) VALUES ('$devicename','$name','$number','$email','$question'و'$cellphone','$email2','$pass','$frname','$laname' ) ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }

}