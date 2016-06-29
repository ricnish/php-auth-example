<?php
session_start();

function authHTML()
{
    // 	if not auhtenticaded session go to login.php
    if (empty($_SESSION['userlogin'])) {
        header('Location: login.php');
        exit();
    }
}

function authAPI()
{
    $user = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
    $pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';

    if (!isValidUser($user, $pass)) {
        $_SESSION['userlogin'] = FALSE;
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die("Not authorized");
    }

    $_SESSION['userlogin'] = $user;
}

function isValidUser($user, $pass)
{
    // 	Implement validation: db, array, whatever...
    if ($user === 'admin' && $pass === 'admin') {
        return TRUE;
    }

    return FALSE;
}
