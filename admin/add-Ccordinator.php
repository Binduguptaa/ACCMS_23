<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for registration
if (isset($_POST['submit'])) {
	$regno = $_POST['regno'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$contactno = $_POST['contact'];
	$emcntno = $_POST['econtact'];
	$stream = $_POST['stream'];
	$edu_detail = $_POST['edu_data'];
	$roles = $_POST['role'];
	$caddress = $_POST['address'];
	$ccity = $_POST['city'];
	$cstate = $_POST['state'];
	$cpincode = $_POST['pincode'];
	$paddress = $_POST['paddress'];
	$pcity = $_POST['pcity'];
	$pstate = $_POST['pstate'];
	$ppincode = $_POST['ppincode'];
	$emailid = $_POST['email'];
	$password = $_POST['password'];
	$result = "SELECT count(*) FROM  course_cordinator WHERE emailid=? || regNo=?";
	$stmt = $mysqli->prepare($result);
	$stmt->bind_param('ss', $email, $regno);
	$stmt->execute();
	$stmt->bind_result($count);
	$stmt->fetch();
	$stmt->close();
	if ($count > 0) {
		echo "<script>alert('Registration number or email id already registered.');</script>";
	} else {

		$query = "INSERT INTO  course_cordinator (regno, firstName, middleName, lastName, gender, contactno, egycontactno, stream, edu_profile, cc_role, emailid, password, corresAddress, corresCity, corresState, corresPincode, pmntAddress, pmntCity, pmnatetState, pmntPincode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
		$stmt = $mysqli->prepare($query);

		// Assuming the variable values are defined elsewhere in your code
		$stmt->bind_param('issssiissssssssisssi', $regno, $fname, $mname, $lname, $gender, $contactno, $emcntno, $stream, $edu_detail, $roles, $emailid, $password, $caddress, $ccity, $cstate, $cpincode, $paddress, $pcity, $pstate, $ppincode);
		$stmt->execute();
		$stmt->close();

		// $query1 = "insert into teachers(regNo,firstName,middleName,lastName,gender,contactNo,email,password) values(?,?,?,?,?,?,?,?)";
		// $stmt1 = $mysqli->prepare($query1);
		// $stmt1->bind_param('sssssiss', $regno, $fname, $mname, $lname, $gender, $contactno, $emailid, $contactno);
		// $stmt1->execute();
		echo "<script>alert('Student Succssfully register');</script>";
	}
}


?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/validation.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<script type="text/javascript">
		function valid() {
			if (document.registration.password.value != document.registration.cpassword.value) {
				alert("Password and Re-Type Password Field do not match  !!");
				document.registration.cpassword.focus();
				return false;
			}
			return true;
		}
	</script>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title"> Course_Cordinator's Registration </h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">

											<div class="form-group">
												<label class="col-sm-2 control-label">
													<h4 style="color: green" align="left">Personal info </h4>
												</label>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Registration No : </label>
												<div class="col-sm-8">
													<input type="text" name="regno" id="regno" class="form-control" required="required" onBlur="checkRegnoAvailability()">
													<span id="user-reg-availability" style="font-size:12px;"></span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">First Name : </label>
												<div class="col-sm-8">
													<input type="text" name="fname" id="fname" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Middle Name : </label>
												<div class="col-sm-8">
													<input type="text" name="mname" id="mname" class="form-control">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Last Name : </label>
												<div class="col-sm-8">
													<input type="text" name="lname" id="lname" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Gender : </label>
												<div class="col-sm-8">
													<select name="gender" class="form-control" required="required">
														<option value="">Select Gender</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact No : </label>
												<div class="col-sm-8">
													<input type="text" name="contact" id="contact" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Emergency Contact: </label>
												<div class="col-sm-8">
													<input type="text" name="econtact" id="econtact" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">
													<h4 style="color: green" align="left">Professional info </h4>
												</label>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Department/Stream:</label>
												<div class="col-sm-8">
													<select name="stream" id="stream" class="form-control" required>
														<option value="">Select Department/Stream</option>
														<?php
														$query1 = "SELECT DISTINCT stream FROM course";
														$stmt1 = $mysqli->prepare($query1);
														$stmt1->execute();
														$res1 = $stmt1->get_result();
														while ($row1 = $res1->fetch_object()) {
														?>
															<option value="<?php echo $row1->stream; ?>"><?php echo $row1->stream; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Educational Background:</label>
												<div class="col-sm-8">
													<input type="text" name="edu_data" id="edu_data" class="form-control" required="required">
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Role Description: </label>
												<div class="col-sm-8">
													<textarea rows="3" name="role" id="role" class="form-control" required="required"></textarea>
												</div>
											</div>




											<div class="form-group">
												<label class="col-sm-3 control-label">
													<h4 style="color: green" align="left">Credentials login</h4>
												</label>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Email id: </label>
												<div class="col-sm-8">
													<input type="email" name="email" id="email" class="form-control" onBlur="checkAvailability()" required="required">
													<span id="user-availability-status" style="font-size:12px;"></span>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Password: </label>
												<div class="col-sm-8">
													<input type="password" name="password" id="password" class="form-control" required="required">
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Confirm Password : </label>
												<div class="col-sm-8">
													<input type="password" name="cpassword" id="cpassword" class="form-control" required="required" onblur="valid()">
												</div>
											</div>



											<div class="form-group">
												<label class="col-sm-3 control-label">
													<h4 style="color: green" align="left">Correspondense Address </h4>
												</label>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Address : </label>
												<div class="col-sm-8">
													<textarea rows="5" name="address" id="address" class="form-control" required="required"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">City : </label>
												<div class="col-sm-8">
													<input type="text" name="city" id="city" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">State </label>
												<div class="col-sm-8">
													<select name="state" id="state" class="form-control" required>
														<option value="">Select State</option>
														<?php $query = "SELECT * FROM states";
														$stmt2 = $mysqli->prepare($query);
														$stmt2->execute();
														$res = $stmt2->get_result();
														while ($row = $res->fetch_object()) {
														?>
															<option value="<?php echo $row->State; ?>"><?php echo $row->State; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Pincode : </label>
												<div class="col-sm-8">
													<input type="text" name="pincode" id="pincode" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label">
													<h4 style="color: green" align="left">Permanent Address </h4>
												</label>
											</div>


											<div class="form-group">
												<label class="col-sm-5 control-label">Permanent Address same as Correspondense address : </label>
												<div class="col-sm-4">
													<input type="checkbox" name="adcheck" value="1" />
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Address : </label>
												<div class="col-sm-8">
													<textarea rows="5" name="paddress" id="paddress" class="form-control" required="required"></textarea>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">City : </label>
												<div class="col-sm-8">
													<input type="text" name="pcity" id="pcity" class="form-control" required="required">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">State </label>
												<div class="col-sm-8">
													<select name="pstate" id="pstate" class="form-control" required>
														<option value="">Select State</option>
														<?php $query = "SELECT * FROM states";
														$stmt2 = $mysqli->prepare($query);
														$stmt2->execute();
														$res = $stmt2->get_result();
														while ($row = $res->fetch_object()) {
														?>
															<option value="<?php echo $row->State; ?>"><?php echo $row->State; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Pincode : </label>
												<div class="col-sm-8">
													<input type="text" name="ppincode" id="ppincode" class="form-control" required="required">
												</div>
											</div>


											<div class="col-sm-6 col-sm-offset-4">
												<button class="btn btn-default" type="submit">Cancel</button>
												<input type="submit" name="submit" Value="Register" class="btn btn-primary">
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$('input[type="checkbox"]').click(function() {
			if ($(this).prop("checked") == true) {
				$('#paddress').val($('#address').val());
				$('#pcity').val($('#city').val());
				$('#pstate').val($('#state').val());
				$('#ppincode').val($('#pincode').val());
			}
		});
	});
</script>
<script>
	function checkAvailability() {
		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check_availability.php",
			data: 'roomno=' + $("#room").val(),
			type: "POST",
			success: function(data) {
				$("#room-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error: function() {}
		});
	}
</script>

<script>
	function checkAvailability() {

		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check_availability.php",
			data: 'emailid=' + $("#email").val(),
			type: "POST",
			success: function(data) {
				$("#user-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error: function() {
				event.preventDefault();
				alert('error');
			}
		});
	}
</script>
<script>
	function checkRegnoAvailability() {

		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check_availability.php",
			data: 'regno=' + $("#regno").val(),
			type: "POST",
			success: function(data) {
				$("#user-reg-availability").html(data);
				$("#loaderIcon").hide();
			},
			error: function() {
				event.preventDefault();
				alert('error');
			}
		});
	}
</script>

</html>