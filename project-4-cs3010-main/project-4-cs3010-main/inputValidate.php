<?php
// define variables and set to empty values
$usrErr = $passErr  = $pass1Err = $fnameErr = $lnameErr = $numErr =
$emailErr = $addr1Err = $addr2Err = $cityErr = $stateErr = $zipErr = $genderErr = $maritalErr = $dateErr = "";
$user = $pass = $pass1 = $fname = $lname = $pnum =
$email = $addr1 = $addr2 = $city = $state = $zip = $gender = $marital = $date = "";
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;

    if(!isset($_POST['Username'])){
        $isValid = false;
    }elseif(empty($_POST['Username'])){
        $usrErr = "Username cannot be empty!";
        $isValid = false;
    }else{
        $user = clean_input($_POST['Username']);
        if(strlen($user) < 6 || strlen($user) > 50){
            $usrErr = "Please enter a username between 6-50 Characters.";
            $isValid = false;
        }
    }

    if(!isset($_POST['Password'])){
        $isValid = false;
    }elseif(empty($_POST['Password'])){
        $passErr = "Password cannot be empty!";
        $isValid = false;
    }else{
        $pass = clean_input($_POST['Password']);
        //check pass
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/", $pass)){
            $passErr = " Please enter a password between 8-50 characters containing at least
                            one capital, one lowercase, one digit, and one special character.";
            $isValid = false;
        }
    }

    if(!isset($_POST['pass1'])){
        $isValid = false;
    }elseif(empty($_POST['pass1'])) {
        $pass1Err = "Please enter a password that matches the first!";
        $isValid = false;
    }else{
        $pass1 = clean_input($_POST['pass1']);
        if ($pass !== $pass1) {
            $pass1Err = "Please enter a password that matches the first!";
            $isValid = false;
        }
    }

    if(!isset($_POST['fname'])){
        $isValid = false;
    }elseif(empty($_POST['fname'])){
        $fnameErr = "First Name cannot be empty!";
        $isValid = false;
    }else{
        $fname = clean_input($_POST['fname']);
        if(strlen($fname) > 50){
            $fnameErr = "Please enter a first name less than 50 characters.";
            $isValid = false;
        }
    }

    if(!isset($_POST['lname'])){
        $isValid = false;
    }elseif(empty($_POST['lname'])){
        $lnameErr = "Last Name cannot be empty!";
        $isValid = false;
    } else {
        $lname = clean_input($_POST['lname']);
        if(strlen($lname) > 50){
            $lnameErr = "Please enter a last name less than 50 characters.";
            $isValid = false;
        }
    }

    if(!isset($_POST['pnum'])){
        $isValid = false;
    }elseif(empty($_POST['pnum'])){
        $numErr = "Phone Number cannot be empty!";
        $isValid = false;
    } else {
        $pnum = clean_input($_POST['pnum']);
        if(!preg_match("/^(1-)?\d{3}-\d{3}-\d{4}$/", $pnum)){
            $numErr = "Please enter a valid phone number.";
            $isValid = false;
        }
    }

    if(!isset($_POST['Email'])){
        $isValid = false;
    }elseif(empty($_POST['Email'])){
        $emailErr = "Email is required";
        $isValid = false;
    }else{
        $email = clean_input($_POST['Email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //The filter_var() function is the easiest and safest way
            //to check whether an email address is well-formed.
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }

    if(!isset($_POST['Address1'])){
        $isValid = false;
    }elseif(empty($_POST['Address1'])){
        $addr1Err = "Address cannot be empty!";
        $isValid = false;
    } else {
        $addr1 = clean_input($_POST['Address1']);
        if(strlen($addr1) > 100){
            $addr1Err = "Please enter an Address between 1-100 characters.";
            $isValid = false;
        }
    }

    if(isset($_POST['Address2'])){
        $addr2 = clean_input($_POST['Address2']);
    }else{
        if(strlen($addr2) > 100){
            $addr2Err = "Please Enter Valid Address.";
            $isValid = false;
        }
    }

    if(!isset($_POST['City'])){
        $isValid = false;
    }elseif(empty($_POST['City'])){
        $cityErr = "City cannot be empty!";
        $isValid = false;
    } else {
        $city = clean_input($_POST['City']);
        if(strlen($city) > 50){
            $cityErr = "Please enter a city less than 50 characters.";
            $isValid = false;
        }
    }

    if(isset($_POST['State'])){
        $state = clean_input($_POST['State']);
        if(empty($_POST['State'])){
            $stateErr = "Please select a state!";
            $isValid = false;
        }
    }else {
        $stateErr = "Please select a state!";
        $isValid = false;
    }

    if(!isset($_POST['zip'])){
        $isValid = false;
    }elseif(empty($_POST['zip'])){
        $zipErr = "Zip Code cannot be empty!";
        $isValid = false;
    } else {
        $zip = clean_input($_POST['zip']);
        if(!preg_match("/^[0-9]{5}(?:-[0-9]{4})?$/", $zip)){
            $zipErr = "Please enter a zip code between 5-10 characters with hyphen.";
            $isValid = false;
        }
    }

    if(isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $isValid = false;
        }
    } else {
        $genderErr = "Gender is required";
        $isValid = false;
    }

    if(isset($_POST["marital"])) {
        $marital = clean_input($_POST["marital"]);
        if (empty($_POST["marital"])) {
            $maritalErr = "Marital Status is required";
            $isValid = false;
        }
    } else {
        $maritalErr = "Marital Status is required";
        $isValid = false;
    }

    if(isset($_POST['date'])){
        $date = clean_input($_POST['date']);
        if(empty($date)){
            $dateErr = "Please select a date.";
            $isValid = false;
        }
    }else{
        $dateErr = "Please select a date.";
        $isValid = false;
    }
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
