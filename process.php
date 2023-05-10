<?php

// Connect to db
if (isset($_POST['firstname']) && isset($_POST['lastname'])&& isset($_POST['email'])&& isset($_POST['username'])) && isset($_POST['password']){

    include 'dbconnect.php';

//validation
    
   function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }

   $firstname = validate($_POST['firstname']);
   $lastname = validate($_POST['lastname']);
   $email = validate($_POST['email']);
   $username = validate($_POST['username']);
   $password = validate($_POST['password']);
   

   if (empty($username) || empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
    header("location:register.php");
} else {
    $sql = "INSERT INTO users(firstname,lastname,email,username, password) VALUES('$firstname','$lastname','$email','$username','$password')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
       header("location:login.php");
    }else {
        echo "An error occurred, user not registered";
    }
}

    }else {
    header("register.php");
}


?>