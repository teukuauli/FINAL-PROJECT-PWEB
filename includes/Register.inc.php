<?php
if(isset($_POST['submit']))
{	
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

     require_once 'db.inc.php';
     require_once 'function.inc.php';

     if (emptyInputRegister($name, $email, $username, $pwd,$pwdRepeat ) !== false ){
        header("location: ../Register.php?error=emptyInput");
        exit();
     }
     if (invalidUid($username ) !== false ){
        header("location: ../Register.php?error=invalidusername");
        exit();
     }
     if (invalidEmail($email ) !== false ){
        header("location: ../Register.php?error=invalidemail");
        exit();
     }
     if (pwdMatch($pwd,$pwdRepeat ) !== false ){
        header("location: ../Register.php?error=passworddontmatch");
        exit();
     }
     if (uidExists($conn,$username,$email ) !== false ){
        header("location: ../Register.php?error=usernametaken");
        exit();
     }

     createUser($conn,$name, $email, $username, $pwd); 
       
 }
     else{
        header("location: ../Register.php");
        exit();
     }
