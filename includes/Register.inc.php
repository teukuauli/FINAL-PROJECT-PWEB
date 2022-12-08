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

     function emptyInputLogin($username, $pwd){
      $result;
      if (empty($username) || empty($pwd)){
          $result = true;
      }
      else{
          $result = false;
      }
      return $result;
  }

  function loginUser($conn,$username,$pwd){
   $uidExists = uidExists($conn, $username, $email );

   if ($uidExists === false) {
      header("location: ../Login.php?error=wronglogin");
      exit();
  }

  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);

  if ($checkPwd === false) {
   header("location: ../Login.php?error=wronglogin");
   exit();
  }
  else if ($checkPwd === true) {
   session_start();
   $_SESSION["usersid"] = $uidExists["usersid"];
   $_SESSION["usersuid"] = $uidExists["usersuid"];
   header("location: ../index.php");
   exit();
  }

}