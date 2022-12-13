<?php

require_once 'db.inc.php';
require_once 'function.inc.php';

if(isset($_POST['uid']) && isset($_POST['pwd']) )
{	
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if (emptyInputLogin($username, $pwd ) !== false ){
        header("location: ../index.php?error=emptyInput");
        exit();
     }
     else {
        loginUser($conn,$username,$pwd);

     }
   
}
else {
    header("location: ../index.php");
    exit();
}