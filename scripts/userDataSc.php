<?php
    session_start();
    $firstNameErr = $lastNameErr = $userNameErr = $emailErr = "";
    $firstName = $middleName = $lastName= $userName = $email = $phone = "";
    $errorMessage="Полето е задължително!";

    function CheckInput($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {     
        $firstName= CheckInput($_POST["firstName"]);
        $middleName=CheckInput($_POST["middleName"]); 
        $lastName=CheckInput($_POST["lastName"]);
        $userName=CheckInput($_POST["userName"]);
        $email=CheckInput($_POST["email"]);
        $phone=CheckInput($_POST["phone"]);  
        $valid=TRUE;
        if(empty($firstName))     
        {
            $firstNameErr=$errorMessage;
            $valid=FALSE;
        }
        if(empty($lastName))
        {
            $lastNameErr=$errorMessage;
            $valid=FALSE;
        }
        if(empty($userName))
        {
            $userNameErr=$errorMessage;
            $valid=FALSE;
        }
        if(empty($email))
        {
            $emailErr=$errorMessage;
            $valid=FALSE;
        } 
        if($valid)
        {      
            $_SESSION["userData"]["firstName"]=$firstName;
            $_SESSION["userData"]["middleName"]=$middleName;
            $_SESSION["userData"]["lastName"]=$lastName;
            $_SESSION["userData"]["userName"]=$userName;
            $_SESSION["userData"]["email"]=$email;
            $_SESSION["userData"]["phone"]=$phone;
            header("Location: addresses.php"); 
        }
    }
    else
    {
        if(!empty($_SESSION["userData"]["firstName"]))
        {
            $firstName=$_SESSION["userData"]["firstName"];
        }
        if(!empty($_SESSION["userData"]["middleName"]))
        {
            $middleName=$_SESSION["userData"]["middleName"];
        }
        if(!empty($_SESSION["userData"]["lastName"]))
        {
            $lastName=$_SESSION["userData"]["lastName"];
        }
        if(!empty($_SESSION["userData"]["userName"]))
        {
            $userName=$_SESSION["userData"]["userName"];
        }
        if(!empty($_SESSION["userData"]["email"]))
        {
            $email=$_SESSION["userData"]["email"];
        }
        if(!empty($_SESSION["userData"]["phone"]))
        {
            $phone=$_SESSION["userData"]["phone"];
        }
    }
?>

