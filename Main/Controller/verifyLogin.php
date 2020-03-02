<?php
// controller

require_once("../Model/DatabaseManager.php");
require_once("../Model/modelLogin.php");

// start session
session_start();

// // new object of the class
$loginConn = new DatabaseManager();
$Login = new Login($loginConn);

$login = $Login->verifyLogin($_POST["userName"], $_POST["password"]);

if (count($login)==1)
{
    //save username in a session
    $_SESSION['studentName'] = $login[0]["studentName"];

    //save password in a session
    // $_SESSION['studentPassword'] = $login[0]["studentPassword"];
    
    //if credential are correct go to student portal
    header("Location:../View/Student/studentClasses.php");
}
else
{
    // if credential are wrong return to login page
    header("Location:../View/Login.php");
}


?>