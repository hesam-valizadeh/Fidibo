<?php
require_once 'functions.php';
if (isset($_POST['sendreq'])) {
    if (isValidate()) {
        if (addToDatabase()) {
            $_POST['iname'] = $_POST['iquest'] = $_POST['idevicename'] = $_POST['inumber'] = $_POST['iemail'] = '';
            $regstatus = true;
        }else{
            $regstatus = false;
        }

    }
}
if (isset($_POST['login'])) {
    if (isValidate()) {
        if (addToDatabase()) {
            $_POST['icellphone'] = $_POST['ipass'] = $_POST['iemail2'] = '';
            $regstatus = true;
        }else{
            $regstatus = false;
        }

    }
}