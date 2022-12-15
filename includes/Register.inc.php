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
     if (pwdMatch($pwd, $pwdRepeat ) !== false ){
        header("location: ../Register.php?error=passworddontmatch");
        exit();
     }
     if (uidExists($conn, $username, $email ) !== false ){
        header("location: ../Register.php?error=usernametaken");
        exit();
     }

     createUser($conn,$name, $email, $username, $pwd); 
       
 }
     else{
        header("location: ../Register.php");
        exit();
     }

   // if (isset($_GET["error"])) {
   //    if ($_GET["error"] == "emptyinput"){
   //       echo "<p> Fill in all fields!</p>";
   //    }
   //    else if ($_GET["error"] == "inalidUid"){
   //       echo "<p> Choose a prooper username!</p>";
   //    }
   //    else if ($_GET["error"] == "inalidEmail"){
   //       echo "<p> Choose a prooper email!</p>";
   //    }
   //    else if ($_GET["error"] == "passworddontmatch"){
   //       echo "<p> Passwords doesn't match</p>";
   //    }
   //    else if ($_GET["error"] == "stmtfailed"){
   //       echo "<p> Something went wrong</p>";
   //    }
   //    else if ($_GET["error"] == "usernametaken"){
   //       echo "<p> username already taken</p>";
   //    }
   //    else if ($_GET["error"] == "none"){
   //       echo "<p> Register Success </p>";
   //    }
   // }