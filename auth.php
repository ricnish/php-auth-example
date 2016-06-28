<?php
session_start();

function authHTML()
{
    // 	if not auhtenticaded session go to login.php
    if (empty($_SESSION['userlogin']) || empty($_SESSION['authenticated'])) {
        header('Location: login.php');
        exit();
    }
}

function authAPI()
{
    $user = isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
    $pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';

    if (empty($user) || empty($pass) || !isValidUser($user, $pass)) {
        $_SESSION['authenticated_api'] = 0;
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        die("Not authorized");
    }

    $_SESSION['userlogin'] = $user;
    $_SESSION['authenticated_api'] = 1;
}

function isValidUser($user, $pass)
{
    if (!empty($_SESSION['authenticated_api']) &&
        !empty($_SESSION['userlogin']) &&
        $_SESSION['userlogin'] === $user) {
        return true;
    }


    // 	Implement validation: db, array, whatever...
    if ($user === 'admin' && $pass === 'admin') {
        return true;
    }

    return false;
}
