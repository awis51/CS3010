<?php
include 'inputValidate.php';
include 'connectionInfo.php';
if ($isValid) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth)
			VALUES (:name, :pass, :fname, :lname, :addr1,
			:addr2, :city, :state, :zip, :num, :email, :gender,
			:marital, :date)");
        $sql->bindParam(':name', $user);
        $sql->bindParam(':pass', $pass);
        $sql->bindParam(':fname', $fname);
        $sql->bindParam(':lname', $lname);
        $sql->bindParam(':addr1', $addr1);
        $sql->bindParam(':addr2', $addr2);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':zip', $zip);
        $sql->bindParam(':num', $pnum);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':marital', $marital);
        $sql->bindParam(':date', $date);

        $sql->execute();

        $last_id = $conn->lastInsertId();
        $_SESSION["last_id"] = "$last_id";

        header("Location: confirmation.php");
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    } finally {
        $conn = null;
    }
}