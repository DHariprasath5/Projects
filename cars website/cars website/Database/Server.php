<?php
$con=new mysqli('localhost','root','','datadb');
if (!$con)
 {
	die("Connection failed:"."connect_error");
}
$Name=$_POST['First_Name'];
$Name=$_POST['Last_Name'];
$PhoneNumber=$_POST['Phone_Number'];
$email=$_POST['email'];
$password=$_POST['password'];
$cost=$_POST['cost'];
$delivery=$_POST['delivery'];

$var="INSERT into collection (company_name,product_name,email_id,phone,quantity,cost,delivery_time) values('$comp','$prod','$email','$phone','$quant','$cost','$delivery')";
if (mysqli_query($con, $var)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $var . "<br>" . mysqli_error($con);
}
