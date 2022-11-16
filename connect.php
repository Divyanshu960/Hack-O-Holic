<?php

$uid =8990;
$name = $_POST['name'];
$email =$_POST['email'];
$phno =$_POST['phno'];
$dob =$_POST['dob'];


$gender = $_POST['gender'];//"male";
$nat ="Indian";//$_POST['nat'];
$state ="Uttarakhand";//$_POST['state'];
$dist ="dehradun";//$_POST['dist'];
$addressline = "vivek vihar gms road";//$_POST['addressline'];
$postal ="248001";//$_POST['postal'];

//database se connection
echo "Table Updated";
// Create connection
$conn = new mysqli('localhost','root','','aadharrecords_sql');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
else {
$stmt = $conn->prepare("insert into aadhardetails(uid, name, email, phno, dob,gender, nat, state, dist, addressline, postal)
values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt -> bind_param("sssssssssss",$uid,$name,$email,$phno,$dob,$gender,$nat,$state,$dist,$addressline,$postal);
$stmt->execute();
echo "Table Updated";
$stmt->close();
$conn->close();

} 

?>


