<?php
require_once 'auth.php';

// if post check user
if(isset($_POST['login']))
{
  if(!empty($_POST['userlogin']) && !empty($_POST['pass']))
  {
    if(!empty($_SESSION['authenticated']))
    {
      if(empty($_SESSION['userlogin']) || $_POST['userlogin'] !== $_SESSION['userlogin'])
      {
        $_SESSION['authenticated'] = 0;
      }
    }

    if(empty($_SESSION['authenticated']))
    {
      if(isValidyUser($_POST['userlogin'], $_POST['pass']))
      {
        $_SESSION['userlogin'] = $_POST['userlogin'];
        $_SESSION['authenticated'] = 1;
      }
    }
  }
}

header('Location: index.php');
