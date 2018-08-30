<?php
    // db
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "signup";
    
//variables
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['mail'];
    $password=$_POST['password'];
    
//Connect to MySQL Server
   $con= new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    echo "sucessful connection";

    $sql="INSERT INTO sign(firstname,lastname,email,password)
        VALUES('$firstname','$lastname','$email','$password')";

    $result = mysqli_query($con,$sql);
        if($result){
            echo "registration succesful";
        }else{
            echo "\n registration failture";
        }

?>
