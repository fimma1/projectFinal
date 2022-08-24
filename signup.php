<!-- the 'if' statement performs the following actions 
when the button with name 'submit' is clicked -->
<?php
    session_start();
    require "connection.php";
    if(isset($_POST['submit'])){


        //line 9-22 will save the user input in the form in their respective variables declared
        $registration_number = $_POST['rNum'];
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $otherName = $_POST['oName'];
        $programme = $_POST['programme'];
        $hall = $_POST['hall'];
        //$hall = filter_input(INPUT_POST,'hall',FILTER_SANITIZE_STRING);
        $dateOfBirth = $_POST['dob'];
        $gender = $_POST['gender'];
        //$gender = filter_input(INPUT_POST,'gender',FILTER_SANITIZE_STRING);
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encryptPassword = md5($password);


        //line 27-29 will post values user enters into the form to the database created
        $storeQuery = "INSERT INTO users(student_id,fName,surname,other_name,programme_of_study,hall,date_of_birth,sex,
                       contact,email,password) VALUES('$registration_number', '$firstName', '$lastName', '$otherName',
                       '$programme', '$hall', '$dateOfBirth', '$gender', '$contact', '$email', '$password') ";


        //line 32 will store the result of the database connection and query in the variable '$result'
        $result = mysqli_query($conn,$storeQuery);


        // the 'if' statement is checking that the query is successful, then it executes the following code within it
        if($result){
            //echo "user created successfully";

           

            // redirecting a user back to the index.html page
            header("location:mainLogin.php");

        }else{
            // echo mysqli_connect_error();
           echo "unsuccessful!!";
            //header("location:signup.html");
        }

    }

   
?>