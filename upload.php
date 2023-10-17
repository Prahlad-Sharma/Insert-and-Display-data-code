<?php
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phoneNumber"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    if(empty($fullname)){
        echo '<script>alert("Please enter the name of employee..");</script>';
    }else if(empty($username)){
        echo '<script>alert("Please enter the user name..");</script>';
    }
    else if(empty($email)){
        echo '<script>alert("Please enter the email id..");</script>';
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Invalid email address format.");</script>';
    }else if(!validateMobileNumber($phonenumber)){
        echo '<script>alert("Please enter the valid mobile number.");</script>';
    }
    else if(empty($password)){
        echo '<script>alert("Please enter the password..");</script>';
    }else if (empty($gender)) {
        echo '<script>alert("Please select the gender...");</script>';
    }else{
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "registration";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else{
        $sql = "insert into registration (fullname, username,email,phonenumber,password,gender) VALUES ('$fullname', '$username', '$email','$phonenumber','$password','$gender')";
         if ($conn->query($sql) === TRUE) {
             echo '<script>alert("Information has been inserted successfully...");</script>';
             header("Location: viewcontent.php");
            exit();
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
    
       
         $conn->close();
        }      
}


    function validateMobileNumber($mobileNumber) {

        $cleanedNumber = preg_replace('/[^0-9]/', '', $mobileNumber);
        if (strlen($cleanedNumber) === 10 && preg_match('/^[6-9][0-9]{9}$/', $cleanedNumber)) {
            return true; 
        } else {
            return false;
        }
    }
?>