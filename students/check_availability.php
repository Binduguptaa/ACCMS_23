<?php
require_once("includes/config.php");
//For Email
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error : You did not enter a valid email.";
	}
	else {
		$result ="SELECT count(*) FROM registration WHERE emailid=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$email);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Email already exist. Please try again.</span>";
}
}
}
// For Registration Number
if(!empty($_POST["regno"])) {
	$regno= $_POST["regno"];

		$result ="SELECT count(*) FROM registration WHERE regNo=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$regno);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Registration number already exist. Please try again .</span>";
}

}


// For old Password
if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM registration WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) 
echo "<span style='color:green'> Password  matched .</span>";
else echo "<span style='color:red'> Password Not matched</span>";
}

