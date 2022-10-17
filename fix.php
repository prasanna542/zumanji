<?php
$servername="localhost";
$username="root";
$password="";
$databasename="subscribedusers";

$conn= mysqli_connect($servername,$username,$password,$databasename);
//now check the connection

if($conn->connect_error)
{
    die("connection failed: ". $conn-> connect_error);
}


    // echo "connection successful";
// if(isset($_POST['save']))
// {
$useremail= $_POST['email'];
$userpassword= $_POST['password'];
$userfullname= $_POST['name'];
$userphoneno= $_POST['mobile'];
$useraddress= $_POST['add1'];
$useraddress2= $_POST['add2'];

$sql_query = "INSERT INTO subscribers values('$useremail','$userpassword','$userfullname','$userphoneno','$useraddress','$useraddress2')";

if($conn->query($sql_query)===TRUE)
{
    echo "details entry inserted successfully!";
}
else{
    echo "Error: ". $sql."". $conn-> error;
}
$conn->close();


?>