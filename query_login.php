<?php 
session_start();
include('include/dbcon.php');

if (isset($_POST['username']) && isset($_POST['password'])) {

  function validate($data){

     $data = trim($data);

     $data = stripslashes($data);

     $data = htmlspecialchars($data);

     return $data;

  }

  $uname = validate($_POST['username']);

  $pass = validate($_POST['password']);

  if (empty($uname)) {

      echo 'error';

      exit();

  }else if(empty($pass)){

     echo 'error';

      exit();

  }else{

      $sql = "SELECT * FROM tbladmin WHERE username='$uname' AND password ='$pass'";

      $result = mysqli_query($dbcon, $sql);

      if (mysqli_num_rows($result) === 1) {

          $row = mysqli_fetch_assoc($result);

          if ($row['username'] === $uname && $row['password'] === $pass) {

              echo "Logged in!";

              $_SESSION['username'] = $row['username'];

              header("Location: test1.php");

              exit();

          }else{

              echo ' wrong password or username';

              exit();

          }

      }else{

         echo ' wrong password or username';

          exit();

      }

  }

}else{

  echo ' wrong password or username';

  exit();

}
?>