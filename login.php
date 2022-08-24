<?php

session_start();
require 'connection.php';


  if(isset($_POST['submit'])){

      $regNum = $_POST['reg_num'];
      $password = $_POST['password'];

      $selectQuery = "SELECT student_id, password FROM users WHERE student_id='$regNum' ";

      $selectResult = mysqli_query($conn,$selectQuery);

      $selectResult ->data_seek(0);

      $row=$selectResult ->fetch_array(MYSQLI_ASSOC);

      if($password==$row['password']){ 
          //echo "right";
          $_SESSION['student_id']=$regNum; //learn about $_SESSION
          $_SESSION['success']="successful";

          header("location:mainPage.php");

      }else{
        $_SESSION['fail']="failure";
        header("location:mainLogin.php"); 
        //echo "wrong";
        //mysqli_connect_error();
      }

      // }else{
      //   mysqli_connect_error($conn);
      // }
  }

// if(isset($_POST['submit'])){
//     $registration_number = $_POST['reg_num'];
//     $password = $_POST['password'];

//     //echo $registration_number //will print the email user entered to login
//     //echo $password; //will print the email user entered to login

//     $myQuery = "SELECT student_id, password FROM users WHERE 
//                 student_id='$registration_number' and password='$password' ";

//     $selectResult = mysqli_query($conn,$myQuery);

//     //will select the first result only
//     $selectResult ->data_seek(0);

//     //will fetch user details from the database
//     $row=$selectResult ->fetch_array(MYSQLI_ASSOC);

//     //will echo the email and password
//     echo $row['reg_num'].'<br>'.$row['password'];

  //  if($password==$row['password']){ //checking if login password is found in the database
  //       header("location:signup.html"); //will redirect you to the index page when login is successful
       

  //   }else{
  //     // header("location:index.html"); //will redirect you back to the login page when login is unsuccessful
  //     echo mysqli_connect_error();
  //   }


//}

?>