<?php 
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $isValid = true;
    $firstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $fatherName = $_POST['faname'];
    $motherName = $_POST['mname'];
    $blood = $_POST['bloods'];
    $religions = $_POST['religions'];
    $presentAddress = $_POST['road'] . "," . $_POST['city'] . " " . $_POST['postcode'] . "," . $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $road = $_POST['road'];
    $postcode = $_POST['postcode'];

    
    if(empty($firstName)){
        $_SESSION['firstNameErrMsg'] = "First Name is required";
        $isValid = false;
        
    }
    else{
        $_SESSION['firstName'] = $firstName;
        $_SESSION['firstNameErrMsg'] = "";
    }
    if(empty($LastName)){
        $_SESSION['LastNameErrMsg'] = "Last Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['LastName'] = $LastName;
        $_SESSION['LastNameErrMsg'] = "";
    }
    if(empty($fatherName)){
        $_SESSION['fatherNameErrMsg'] = "Father Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['fatherName'] = $fatherName;
        $_SESSION['fatherNameErrMsg'] = "";
    }
    if(empty($motherName)){
        $_SESSION['motherNameErrMsg'] = "Mother Name is required";
        $isValid = false;
    }
    else{
        $_SESSION['motherName'] = $motherName;
        $_SESSION['motherNameErrMsg'] = "";
    }
    if(empty($blood)){
        $_SESSION['bloodErrMsg'] = "Blood Group is required";
        $isValid = false;
    }
    else{
        $_SESSION['blood'] = $blood;
        $_SESSION['bloodErrMsg'] = "";
    }
    if(empty($religions)){
        $_SESSION['religionsErrMsg'] = "Religion is required";
        $isValid = false;
    }
    else{
        $_SESSION['religions'] = $religions;
        $_SESSION['religionsErrMsg'] = "";
    }
    if(empty($presentAddress)){
        $_SESSION['presentAddressErrMsg'] = "Present Address is required";
        $isValid = false;
    }
    else{
        $_SESSION['presentAddress'] = $presentAddress;
        $_SESSION['presentAddressErrMsg'] = "";
    }
    if(empty($email)){
        $_SESSION['emailErrMsg'] = "Email is required";
        $isValid = false;
    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['emailErrMsg'] = "";
    }
    if(empty($phone)){
        $_SESSION['phoneErrMsg'] = "Phone is required";
        $isValid = false;
    }
    else{
        $_SESSION['phone'] = $phone;
        $_SESSION['phoneErrMsg'] = "";
    }
    if(empty($website)){
        $_SESSION['websiteErrMsg'] = "Website is required";
        $isValid = false;
    }
    else{
        $_SESSION['website'] = $website;
        $_SESSION['websiteErrMsg'] = "";
    }
    if(empty($username)){
        $_SESSION['usernameErrMsg'] = "Username is required";
        $isValid = false;
    }
    else{
        $_SESSION['username'] = $username;
        $_SESSION['usernameErrMsg'] = "";
    }
    if(empty($password)){
        $_SESSION['passwordErrMsg'] = "Password is required";
        $isValid = false;
    }
    else{
        $_SESSION['password'] = $password;
        $_SESSION['passwordErrMsg'] = "";
    }
    if(empty($cpassword)){
        $_SESSION['cpasswordErrMsg'] = "Confirm Password is required";
        $isValid = false;
    }
    else{
        $_SESSION['cpassword'] = $cpassword;
        $_SESSION['cpasswordErrMsg'] = "";
    }
    if($password != $cpassword){
        $_SESSION['cpasswordErrMsg'] = "Password and Confirm Password must be same";
        $isValid = false;
    }
    if(empty($road)){
        $_SESSION['roadErrMsg'] = "Road is required";
        $isValid = false;
    }
    else{
        $_SESSION['road'] = $road;
        $_SESSION['roadErrMsg'] = "";
    }
    if(empty($postcode)){
        $_SESSION['postcodeErrMsg'] = "Postcode is required";
        $isValid = false;
    }
    else{
        $_SESSION['postcode'] = $postcode;
        $_SESSION['postcodeErrMsg'] = "";
    }
    // if($isValid === true){
    //     header("Location: ../views/Reg.php");
    // }
    // else{
    //     header("Location: ../views/Reg.php");
    // }
    if($isValid === true){
        header("Location: Registration.php");
    }
    else{
        header("Location: Registration.php");
    }

}
else{
    echo "Invalid Request";
}







?>