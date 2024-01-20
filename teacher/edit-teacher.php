<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for edit courses
if (isset($_POST['submit'])) {
	$regno = $_POST['regno'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$contactno = $_POST['contact'];
	$emcntno = $_POST['econtact'];
	$role = $_POST['role'];
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
	$id = $_GET['id'];

	$query = "update teachers set regno=?,firstName=?,middleName=?,lastName=?,gender=?,contactno=?,egycontactno=?,experties=?,emailid=?,password=?,corresAddress=?,corresCIty=?,corresState=?,corresPincode=?,pmntAddress=?,pmntCity=?,pmnatetState=?,pmntPincode=? where id=?";
	$stmt = $mysqli->prepare($query);

	$rc = $stmt->bind_param('issssiissssssisssii', $regno, $fname, $mname, $lname, $gender, $contactno, $emcntno, $role, $emailid, $password, $caddress, $ccity, $cstate, $cpincode, $paddress, $pcity, $pstate, $ppincode, $id);
	$stmt->execute();
	if ($stmt->affected_rows > 0) {
		// Update successful
		$stmt->close();
		echo "<script>alert('Course has been Updated successfully');</script>";
		header("Location: manage-teacher.php");
		exit(); // Ensure no further code execution after redirection
	} else {
		// No rows were affected - update might not have happened
		echo "<script>alert('No changes were made or update failed');</script>";
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
	<title>Edit Course</title>
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

						<h2 class="page-title">Edit Course </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit courses</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
											<?php
											$id = $_GET['id'];
											$ret = "select * from teachers where id=?";
											$stmt = $mysqli->prepare($ret);
											$stmt->bind_param('i', $id);
											$stmt->execute(); //ok
											$res = $stmt->get_result();
											//$cnt=1;
											while ($row = $res->fetch_object()) {
											?>
												<div class="form-group">
													<label class="col-sm-2 control-label">Registration No : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->regno; ?>" name="regno" id="regno" class="form-control" required="required">
														<span id="user-reg-availability" style="font-size:12px;"></span>
													</div>
													<?php //echo var_dump($row); 
													?>

												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">First Name : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->firstName; ?>" name="fname" id="fname" class="form-control" required="required">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Middle Name : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->middleName; ?>" name="mname" id="mname" class="form-control">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Last Name : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->lastName; ?>" name="lname" id="lname" class="form-control" required="required">
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
														<input type="text" value="<?php echo $row->contactno; ?>" name="contact" id="contact" class="form-control" required="required">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Emergency Contact: </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->egycontactno; ?>" name="econtact" id="econtact" class="form-control" required="required">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Specialization/Experties : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->experties; ?>" name="gname" id="gname" class="form-control" required="required">
													</div>
												</div>

												

												<div class="form-group">
													<label class="col-sm-2 control-label">Email id: </label>
													<div class="col-sm-8">
														<input type="email" value="<?php echo $row->emailid; ?>" name="email" id="email" class="form-control" required="required">
														<span id="user-availability-status" style="font-size:12px;"></span>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Password: </label>
													<div class="col-sm-8">
														<input type="password" value="<?php echo $row->password; ?>" name="password" id="password" class="form-control" required="required">
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">Confirm Password : </label>
													<div class="col-sm-8">
														<input type="password" value="<?php echo $row->password; ?>" name="cpassword" id="cpassword" class="form-control" required="required">
													</div>
												</div>



												<div class="form-group">
													<label class="col-sm-3 control-label">
														<h4 style="color: green" align="left">Correspondense Address </h4>
													</label>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">Address:</label>
													<div class="col-sm-8">
														<!-- Ensure $row->corresAddress contains the value you want to display -->
														<textarea rows="5" name="address" id="address" class="form-control" required="required"><?php echo htmlspecialchars($row->corresAddress); ?></textarea>
													</div>
												</div>


												<div class="form-group">
													<label class="col-sm-2 control-label">City : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->corresCIty; ?>" name="city" id="city" class="form-control" required="required">
														<?php //echo var_dump($row); 
														?>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">State </label>
													<div class="col-sm-8">
														<select name="state" id="state" class="form-control" required>
															<option value="<?php echo $row->corresState; ?>"><?php echo $row->corresState; ?></option>
															<?php
															$query = "SELECT * FROM states";
															$stmt = $mysqli->prepare($query);
															$stmt->execute();
															$result = $stmt->get_result();

															// Fetching rows and populating the dropdown options
															while ($stateRow = $result->fetch_assoc()) {
															?>
																<option value="<?php echo htmlspecialchars($stateRow['State']); ?>"><?php echo htmlspecialchars($stateRow['State']); ?></option>
															<?php } ?>
														</select>

													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Pincode : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->corresPincode; ?>" name="pincode" id="pincode" class="form-control" required="required">
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
														<textarea rows="5" name="paddress" id="paddress" class="form-control" required="required"><?php echo htmlspecialchars($row->corresAddress); ?></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">City : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->pmntCity; ?>" name="pcity" id="pcity" class="form-control" required="required">
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">State </label>
													<div class="col-sm-8">
														<select name="state" id="state" class="form-control" required>
															<option value="<?php echo $row->corresState; ?>"><?php echo $row->corresState; ?></option>
															<?php
															$query = "SELECT * FROM states";
															$stmt = $mysqli->prepare($query);
															$stmt->execute();
															$result = $stmt->get_result();

															// Fetching rows and populating the dropdown options
															while ($stateRow = $result->fetch_assoc()) {
															?>
																<option value="<?php echo htmlspecialchars($stateRow['State']); ?>"><?php echo htmlspecialchars($stateRow['State']); ?></option>
															<?php } ?>
														</select>

													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Pincode : </label>
													<div class="col-sm-8">
														<input type="text" value="<?php echo $row->pmntPincode; ?>"name="ppincode" id="ppincode" class="form-control" required="required">
													</div>
												</div>


											<?php } ?>
											<div class="col-sm-8 col-sm-offset-2">

												<input class="btn btn-primary" type="submit" name="submit" value="Update Course">
											</div>
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

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

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
</body>

</html>