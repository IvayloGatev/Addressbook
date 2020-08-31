<?php
session_start();
$firstName = $middleName = $lastName= $userName = $email = $phone = "";
$address1=$address2=$postCode=$populatedPlace=$area=$country=array();  
$note=array();
$addressCount=$noteCount=0;

if(empty($_SESSION["userData"]["firstName"] || $_SESSION["userData"]["lastName"] || $_SESSION["userData"]["userName"] || $_SESSION["userData"]["email"] ))
{
   die("Непопълнени лични данни!"); 
}
foreach($_SESSION["addresses"] as $key => $value)
{   
    if(empty($value["address1"] || $value["postCode"] || $value["populatedPlace"] || $value["area"]))
    {
        echo $value["address1"];
        die("Непопълнени данни за адрес!");
    }
}
foreach($_SESSION["notes"] as $key => $value)
{
    if(empty($value))
    {
        die("Непопълнени бележки!");
    }
}

$serverName = "localhost";
$serverUsername =  "root";
$serverPassword = "";
$dbName = "address_book";
$conn = new mysqli($serverName, $serverUsername, $serverPassword, $dbName);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}       
$conn->set_charset('utf8');
$sql="INSERT INTO users(first_name,middle_name,last_name,user_name,email,phone)
VALUES('".$_SESSION['userData']['firstName']."','".$_SESSION['userData']['middleName']."','".$_SESSION['userData']['lastName']."',
'".$_SESSION['userData']['userName']."','".$_SESSION['userData']['email']."','".$_SESSION['userData']['phone']."')"; 
$conn->query($sql);
$userID=$conn->insert_id;
foreach($_SESSION["addresses"] as $key => $value)
{
    $sql="INSERT INTO addresses(address1,address2,post_code,populated_place,area,country)
    VALUES('".$value['address1']."','".$value['address2']."','".$value['postCode']."',
    '".$value['populatedPlace']."','".$value['area']."','".$value['country']."')";
    $conn->query($sql);
    $sql="INSERT INTO users_addresses(user_id,address_id)
    VALUES('".$userID."','".$conn->insert_id."')";  
    $conn->query($sql);
}
foreach($_SESSION["notes"] as $key => $value)
{
    $sql="INSERT INTO notes(user_id,note)
    VALUES('".$userID."','".$value."')";
    $conn->query($sql);
}
session_unset();
$sql = "SELECT * FROM users WHERE users.id = ".$userID."";
$userData=$conn->query($sql);
if ($userData->num_rows > 0)
{
    while($row = $userData->fetch_assoc()) 
    {
        $firstName=$row["first_name"];
        $middleName=$row["middle_name"];
        $lastName=$row["last_name"];
        $userName=$row["user_name"];
        $email=$row["email"];
        $phone=$row["phone"];
    }
}
$sql = "SELECT address1, address2, post_code, populated_place, area, country FROM addresses 
INNER JOIN users_addresses ON addresses.id=users_addresses.address_id WHERE users_addresses.user_id = ".$userID."; ";
$addresses=$conn->query($sql);
if ($addresses->num_rows > 0) 
{
    while($row = $addresses->fetch_assoc())
    {
        $address1[$addressCount]=$row["address1"];
        $address2[$addressCount]=$row["address2"];
        $postCode[$addressCount]=$row["post_code"];
        $populatedPlace[$addressCount]=$row["populated_place"];
        $area[$addressCount]=$row["area"];
        $country[$addressCount]=$row["country"];
        $addressCount++;
    }
}
$sql="SELECT * FROM notes WHERE notes.user_id = ".$userID.";";
$notes=$conn->query($sql);
if ($notes->num_rows > 0) 
{
    $i=0;
    while($row = $notes->fetch_assoc())
    {
        $note[$noteCount]=$row["note"];
        $noteCount++;
    }
}
$conn->close();
?>

